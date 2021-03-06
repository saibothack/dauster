<?php

/* @particles/gridcontent.html.twig */
class __TwigTemplate_9b3657519e56de2332bf63a35dc166c2e9700890e95fe278148de0570108ad29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gridcontent.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        echo "\t
\t<div class=\"g-gridcontent\">
\t\t\t";
        // line 7
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-gridcontent-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        echo "\t
\t\t\t";
        // line 8
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array())) {
            // line 9
            echo "\t\t\t<div class=\"g-gridcontent-readmore\">
\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmorelink", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmoreclass", array()));
            echo "\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array());
            echo "</a>
\t\t\t</div>\t
\t\t\t";
        }
        // line 12
        echo "\t\t
\t\t<div class=\"g-gridcontent-wrapper ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo "\">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gridcontentitems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gridcontentitem"]) {
            // line 15
            echo "\t\t\t    <div class=\"g-gridcontent-item\">
\t\t\t    \t<div class=\"g-gridcontent-item-wrapper ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "textstyle", array()));
            echo "\">
\t\t\t    \t\t<div class=\"g-gridcontent-item-img\">
\t\t\t    \t\t\t";
            // line 18
            if ($this->getAttribute($context["gridcontentitem"], "img", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["gridcontentitem"], "img", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array()));
                echo "\">";
            }
            // line 19
            echo "\t\t\t    \t\t</div>
\t\t\t    \t\t<div class=\"g-gridcontent-item-content\">
\t\t\t\t        \t";
            // line 21
            if ($this->getAttribute($context["gridcontentitem"], "icon", array())) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "icon", array()));
                echo "\"></i>";
            }
            // line 22
            echo "\t\t\t\t        \t";
            if ($this->getAttribute($context["gridcontentitem"], "text1", array())) {
                echo "<span class=\"g-gridcontent-item-text1\">";
                echo $this->getAttribute($context["gridcontentitem"], "text1", array());
                echo "</span>";
            }
            // line 23
            echo "\t\t\t\t        \t";
            if ($this->getAttribute($context["gridcontentitem"], "text2", array())) {
                echo "<span class=\"g-gridcontent-item-text2\">";
                echo $this->getAttribute($context["gridcontentitem"], "text2", array());
                echo "</span>";
            }
            // line 24
            echo "\t\t\t\t        \t";
            if ($this->getAttribute($context["gridcontentitem"], "desc", array())) {
                echo "<div class=\"g-gridcontent-item-desc\">";
                echo $this->getAttribute($context["gridcontentitem"], "desc", array());
                echo "</div>";
            }
            echo "\t
\t\t\t\t\t        ";
            // line 25
            if ($this->getAttribute($context["gridcontentitem"], "link", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "link", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "linkclass", array()));
                echo "\">";
                echo $this->getAttribute($context["gridcontentitem"], "linktext", array());
                echo "</a>";
            }
            echo " \t\t\t\t    \t\t\t
\t\t\t    \t\t</div>\t
\t\t\t    \t</div>
\t\t\t    </div>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gridcontentitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
\t\t</div>
\t</div>\t
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/gridcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 29,  128 => 25,  119 => 24,  112 => 23,  105 => 22,  99 => 21,  95 => 19,  87 => 18,  82 => 16,  79 => 15,  75 => 14,  71 => 13,  68 => 12,  58 => 10,  55 => 9,  53 => 8,  45 => 7,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}	*/
/* 	<div class="g-gridcontent">*/
/* 			{% if particle.desc %}<div class="g-gridcontent-desc">{{ particle.desc|raw }}</div>{% endif %}	*/
/* 			{% if particle.readmore %}*/
/* 			<div class="g-gridcontent-readmore">*/
/* 				<a href="{{ particle.readmorelink|e }}" class="button {{ particle.readmoreclass|e }}">{{ particle.readmore|raw }}</a>*/
/* 			</div>	*/
/* 			{% endif %}		*/
/* 		<div class="g-gridcontent-wrapper {{ particle.cols|e }}">*/
/* 			{% for gridcontentitem in particle.gridcontentitems %}*/
/* 			    <div class="g-gridcontent-item">*/
/* 			    	<div class="g-gridcontent-item-wrapper {{ gridcontentitem.textstyle|e }}">*/
/* 			    		<div class="g-gridcontent-item-img">*/
/* 			    			{% if gridcontentitem.img %}<img src="{{ url(gridcontentitem.img)|e }}" alt="{{ particle.title|e }}">{% endif %}*/
/* 			    		</div>*/
/* 			    		<div class="g-gridcontent-item-content">*/
/* 				        	{% if gridcontentitem.icon %}<i class="{{ gridcontentitem.icon|e }}"></i>{% endif %}*/
/* 				        	{% if gridcontentitem.text1 %}<span class="g-gridcontent-item-text1">{{ gridcontentitem.text1|raw }}</span>{% endif %}*/
/* 				        	{% if gridcontentitem.text2 %}<span class="g-gridcontent-item-text2">{{ gridcontentitem.text2|raw }}</span>{% endif %}*/
/* 				        	{% if gridcontentitem.desc %}<div class="g-gridcontent-item-desc">{{ gridcontentitem.desc|raw }}</div>{% endif %}	*/
/* 					        {% if gridcontentitem.link %}<a href="{{ gridcontentitem.link|e }}" class="button {{ gridcontentitem.linkclass|e }}">{{ gridcontentitem.linktext|raw }}</a>{% endif %} 				    			*/
/* 			    		</div>	*/
/* 			    	</div>*/
/* 			    </div>	*/
/* 			{% endfor %} */
/* 		</div>*/
/* 	</div>	*/
/* </div>*/
/* {% endblock %}*/
