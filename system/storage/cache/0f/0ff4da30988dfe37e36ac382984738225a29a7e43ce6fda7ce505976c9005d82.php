<?php

/* __string_template__86d67ce3ecc8c431ace097c6f37312a96d17d0ac7ef24cebb120423b3ef837bb */
class __TwigTemplate_2e64b606e660416beb9bb8377f50f9df77d026c3b8a93163365b6ba068994a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
  .container{
    padding-left:0px!important;
    padding-right:0px!important;
  }
  #footer_copyright{
      background: rgb(137,209,0)!important;
      padding-top: 30px!important;
      padding-bottom: 30px!important;
      text-align: center!important;
      color:white!important;
      width:100%;
  }
  #footer_copyright p{
      color: #fff!important;
    font-size: 14px!important;
  }
  footer{
    background-color:white!important;
    border-top:none!important;
    margin-top:200px;
  }
  footer h2{
    color:black;
    padding-bottom:10px;
  }
  footer a{
    font-size:16px;
    color:black;
  }
  footer  li{
    padding-bottom:20px; 
  }
  footer .row{
    padding-bottom:30px;
  }
  footer p{
    color: #666;
    font-size:20px;
  }
  footer img{
    padding-bottom:50px;
  }
  }
@media (max-width: 765px){
.shop {
    margin-left: 10%;
}
.logo1{
  margin-left:10%;
}
}
</style>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-5 col-xs-10 logo1\" style=\"margin-left:10%\">
        <img src=\"image/catalog/demo/slider/Logo@2x.png\"  class=\"img-responsive\" style=\"width:600px\"/>
        <p>
          Established by Mr Tan Ah Lee in 1976, Merry Horticulture hold more</p>
          <p>than 35 years of experience in the field of supplying tropical outdoor</p>
          <p>and indoor plants. Ever the years, Merry Horticulture has gained a solid</p>
          <p>reputation in delivering quality plants and expanded its market locally</p>
          <p>and globally.
        </p>
      </div>
      <div class=\"col-md-2 col-sm-2 col-xs-5 shop\" style=\"margin-left:10%\">
        <h2>Shop</h2>
        <ul class=\"list-unstyled\">
          ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 71
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </ul>
      </div>
      <div class=\"col-md-2 col-sm-2 col-xs-5\">
        <h2>Account</h2>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 78
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 79
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 80
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">Shipping & Returns</a></li>
          <li><a href=\"";
        // line 81
        echo $this->getAttribute($this->getAttribute((isset($context["informations"]) ? $context["informations"] : null), 3, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["informations"]) ? $context["informations"] : null), 3, array(), "array"), "title", array());
        echo "</a></li>
          <li><a href=\"";
        // line 82
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">FaQs</a></li>
          <li><a href=\"";
        // line 83
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          
        </ul>
      </div>
    </div>
    <div id=\"footer_copyright\">
    <p >";
        // line 89
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
    </div>
  </div>
</footer>
";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 94
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
</body></html>";
    }

    public function getTemplateName()
    {
        return "__string_template__86d67ce3ecc8c431ace097c6f37312a96d17d0ac7ef24cebb120423b3ef837bb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 96,  160 => 94,  156 => 93,  149 => 89,  138 => 83,  134 => 82,  128 => 81,  124 => 80,  118 => 79,  112 => 78,  105 => 73,  94 => 71,  90 => 70,  19 => 1,);
    }
}
/* <style>*/
/*   .container{*/
/*     padding-left:0px!important;*/
/*     padding-right:0px!important;*/
/*   }*/
/*   #footer_copyright{*/
/*       background: rgb(137,209,0)!important;*/
/*       padding-top: 30px!important;*/
/*       padding-bottom: 30px!important;*/
/*       text-align: center!important;*/
/*       color:white!important;*/
/*       width:100%;*/
/*   }*/
/*   #footer_copyright p{*/
/*       color: #fff!important;*/
/*     font-size: 14px!important;*/
/*   }*/
/*   footer{*/
/*     background-color:white!important;*/
/*     border-top:none!important;*/
/*     margin-top:200px;*/
/*   }*/
/*   footer h2{*/
/*     color:black;*/
/*     padding-bottom:10px;*/
/*   }*/
/*   footer a{*/
/*     font-size:16px;*/
/*     color:black;*/
/*   }*/
/*   footer  li{*/
/*     padding-bottom:20px; */
/*   }*/
/*   footer .row{*/
/*     padding-bottom:30px;*/
/*   }*/
/*   footer p{*/
/*     color: #666;*/
/*     font-size:20px;*/
/*   }*/
/*   footer img{*/
/*     padding-bottom:50px;*/
/*   }*/
/*   }*/
/* @media (max-width: 765px){*/
/* .shop {*/
/*     margin-left: 10%;*/
/* }*/
/* .logo1{*/
/*   margin-left:10%;*/
/* }*/
/* }*/
/* </style>*/
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-5 col-sm-5 col-xs-10 logo1" style="margin-left:10%">*/
/*         <img src="image/catalog/demo/slider/Logo@2x.png"  class="img-responsive" style="width:600px"/>*/
/*         <p>*/
/*           Established by Mr Tan Ah Lee in 1976, Merry Horticulture hold more</p>*/
/*           <p>than 35 years of experience in the field of supplying tropical outdoor</p>*/
/*           <p>and indoor plants. Ever the years, Merry Horticulture has gained a solid</p>*/
/*           <p>reputation in delivering quality plants and expanded its market locally</p>*/
/*           <p>and globally.*/
/*         </p>*/
/*       </div>*/
/*       <div class="col-md-2 col-sm-2 col-xs-5 shop" style="margin-left:10%">*/
/*         <h2>Shop</h2>*/
/*         <ul class="list-unstyled">*/
/*           {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-2 col-sm-2 col-xs-5">*/
/*         <h2>Account</h2>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ wishlist }}">Shipping & Returns</a></li>*/
/*           <li><a href="{{ informations[3].href }}">{{ informations[3].title }}</a></li>*/
/*           <li><a href="{{ account }}">FaQs</a></li>*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           */
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <div id="footer_copyright">*/
/*     <p >{{ powered }}</p>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/*   <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* </body></html>*/
