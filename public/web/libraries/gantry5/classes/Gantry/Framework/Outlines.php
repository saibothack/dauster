<?php

/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Gantry\Framework;

use Gantry\Admin\ThemeList;
use Gantry\Component\Filesystem\Folder;
use Gantry\Framework\Base\Outlines as BaseOutlines;
use Gantry\Joomla\StyleHelper;
use Gantry\Joomla\TemplateInstaller;
use RocketTheme\Toolbox\ResourceLocator\UniformResourceLocator;

class Outlines extends BaseOutlines
{
    /**
     * @param string $path
     * @return $this
     */
    public function load($path = 'gantry-config://')
    {
        $this->path = $path;

        $gantry = $this->container;

        $theme = isset($gantry['theme.name']) ? $gantry['theme.name'] : null;

        $styles = ThemeList::getStyles($theme);

        $configurations = [];
        foreach ($styles as $style) {
            $preset = isset($style->params['preset']) ? $style->params['preset'] : null;
            $configuration = isset($style->params['configuration']) ? $style->params['configuration'] : $preset;

            if ($configuration && $configuration != $style->id) {
                // New style generated by Joomla.
                StyleHelper::copy($style, $configuration, $style->id);
            }
            $configurations[$style->id] = $style->style;
        }

        asort($configurations);

        $this->items = $this->addDefaults($configurations);

        return $this;
    }

    public function preset($id)
    {
        if (is_numeric($id)) {
            $style = StyleHelper::getStyle($id);
            $params = json_decode($style->params, true);

            $id = isset($params['preset']) ? $params['preset'] : 'default';
        }

        return $id;
    }

    public function current($template = null)
    {
        if (!is_object($template)) {
            // Get the template style.
            $template = \JFactory::getApplication()->getTemplate(true);
        }

        $preset = $template->params->get('preset', 'default');
        $configuration = $template->params->get('configuration', !empty($template->id) ? $template->id : null);

        if (JDEBUG && !$configuration) {
            static $shown = false;

            if (!$shown) {
                $shown = true;
                \JFactory::getApplication()->enqueueMessage('[DEBUG] JApplicationSite::getTemplate() was overridden with no specified Gantry 5 outline.', 'notice');
            }
        }

        /** @var UniformResourceLocator $locator */
        $locator = $this->container['locator'];

        return ($configuration && is_dir($locator("{$this->path}/{$configuration}"))) ? $configuration : $preset;
    }

    public function create($title = 'Untitled', $preset = 'default')
    {
        $installer = new TemplateInstaller($this->container['theme.name']);
        $title = $installer->getStyleName($title ? "%s - {$title}" : '%s - Untitled');
        $style = $installer->addStyle($title, ['preset' => $preset ?: 'default']);

        $error = $style->getError();

        if ($error) {
            throw new \RuntimeException($error, 400);
        }

        return $style->id;
    }

    public function duplicate($id)
    {
        $model = StyleHelper::loadModel();

        $item = $model->getTable();
        $item->load($id);

        if (!$item->id) {
            throw new \RuntimeException('Outline not found', 404);
        }

        $pks = [$id];

        if (!$model->duplicate($pks)) {
            throw new \RuntimeException($model->getError(), 400);
        }

        return null;
    }

    public function rename($id, $title)
    {
        $model = StyleHelper::loadModel();

        $item = $model->getTable();
        $item->load($id);

        if (!$item->id) {
            throw new \RuntimeException('Outline not found', 404);
        }

        $item->title = $title;

        if (!$item->check()) {
            throw new \RuntimeException($item->getError(), 400);
        }

        if (!$item->store()) {
            throw new \RuntimeException($item->getError(), 500);
        }

        return $id;
    }

    public function delete($id)
    {
        $model = StyleHelper::loadModel();

        $item = $model->getTable();
        $item->load($id);

        if (!$item->id) {
            throw new \RuntimeException('Outline not found', 404);
        }

        try {
            if (!$model->delete($id)) {
                $error = $model->getError();
                // Well, Joomla can always send enqueue message instead!
                if (!$error) {
                    $messages = \JFactory::getApplication()->getMessageQueue();
                    $message = reset($messages);
                    $error = $message ? $message['message'] : 'Unknown error';
                }
                throw new \RuntimeException($error);
            }
        } catch (\Exception $e) {
            throw new \RuntimeException('Deleting outline failed: ' . $e->getMessage(), 400, $e);
        }

        // Remove configuration directory.
        $gantry = $this->container;

        /** @var UniformResourceLocator $locator */
        $locator = $gantry['locator'];
        $path = $locator->findResource("{$this->path}/{$item->id}", true, true);
        if ($path) {
            if (file_exists($path)) {
                Folder::delete($path);
            }
        }
    }

    /**
     * @param string $id
     * @return boolean
     */
    public function canDelete($id)
    {
        $model = StyleHelper::loadModel();

        $item = $model->getTable();
        $item->load($id);

        if (!$item->id) {
            throw new \RuntimeException('Outline not found', 404);
        }

        return $item->home ? false : true;
    }

    /**
     * @param string $id
     * @return boolean
     */
    public function isDefault($id)
    {
        return !$this->canDelete($id);
    }
}