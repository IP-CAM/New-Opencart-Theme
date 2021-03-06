<?php

/* __string_template__44c1fd082511feef8edba5998d515f21d3dac0b4c3d938e10e028d25a2008c22 */
class __TwigTemplate_9815b490f2cc47b7d9d3047a446b11d13f4c651fb5612e57fef7de0a8c37b275 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 5
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 7
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 13
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 14
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 15
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 16
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 18
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 19
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 21
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">





<link href=\"catalog/view/javascript/slidecss/jquery.fancybox.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/owl.carousel.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/owl.theme.default.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/salesnotifier.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/simple-line-icons.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/slick.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/slidecss/slick-theme.css\" rel=\"stylesheet\" media=\"screen\" />

<link href=\"catalog/view/javascript/slidecss/style-main.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                         
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 52
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<body>



<div class=\"container\" id=\"common-header\">
  <header id=\"header\" >
    <div class=\"container-fluid\">
      <div class=\"row flex\">
        <div class=\"col-lg-1 col-md-1 hidden-sm hidden-xs\">
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4 logo_header text-right\">
          <a href=\"";
        // line 65
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\">
            
            <img alt=\"THENO – Minimal &amp; Clean Watch Store Shopify Theme\" src=\"image/catalog/demo/slider/Logo@2x.png\" class=\"img-logo\">
            
          </a>
        </div>
        <div class=\"col-lg-4 col-md-4 hidden-sm hidden-xs\">
          <ul class=\"nav navbar-nav menu-main\" style=\"margin-top: 35px;font-weight: bold;\">
  
              <li class=\" \">
                
                  <a href=\"";
        // line 76
        echo $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array"), "href", array());
        echo "\" title=\"Shop\" class=\"delay03 uppercase\">SHOP</a>
        
              </li>
                
              <li class=\" \"> 
                  
                    <a href=\"/\" title=\"About\" class=\"delay03 uppercase\">ABOUT</a>
                  
              </li>
  
              <li class=\" \">
                
                  <a href=\"/\" title=\"Blog\" class=\"delay03 uppercase\">WHOLESALE</a>
                
              </li>
            </ul>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-5 text-right icon-main\">

          
          <a href=\"";
        // line 96
        echo (isset($context["login"]) ? $context["login"] : null);
        echo "\" class=\"delay03 inline-block hidden-sm hidden-xs\" id=\"btn-login\">
            
            <i class=\"ms_user\"></i>
            
          </a>
          
          <a href=\"";
        // line 102
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" class=\"delay03 inline-block text-center icon-cart\" id=\"btn-cart\">
            
            <i class=\"ms_cart\"></i>
          </a>
          <a href=\"\" class=\"delay03 inline-block\" id=\"btn-search\">
            
            <i class=\"ms_search\"></i>
            
          </a>
        </div>
      </div>     
    </div>
  </header>
</div>


<style>
  .img-logo{
    width:100%;
  }
  a {
      color: #000000;
  }
  #common-header{
    position:relative;
    z-index:5;
    margin-top:50px;
  }
  #common-home
  {
    position:relative;
    z-index:0;
    margin-top: -156px;
  }
  .ms_user{
      content: url(image/catalog/demo/slider/002-user@2x.png);
  }
  .ms_cart{
      content: url(image/catalog/demo/slider/003-cart@2x.png);
  }
  .ms_search{
      content: url(image/catalog/demo/slider/001-search@2x.png);   
  }
  body{
    
    font-family: Helvetica;
  }
  .container{
    width: 100%;
  }
  .nav.navbar-nav.menu-main{
        margin-top: 68px!important;
      margin-left: 50px;
      font-weight: normal!important;
  }
  .menu-main li {
      
      padding-right: 50px;
  }
  .navbar-nav.menu-main li a {
      
      font-size: 18px;
  }
  @media (max-width: 767px){
  .image-logo{
        width: 130%!important;
  }
  .icon-main{
    text-align: left!important;
  }
}
</style>";
    }

    public function getTemplateName()
    {
        return "__string_template__44c1fd082511feef8edba5998d515f21d3dac0b4c3d938e10e028d25a2008c22";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 102,  207 => 96,  184 => 76,  170 => 65,  157 => 54,  149 => 52,  145 => 51,  134 => 49,  130 => 48,  127 => 47,  118 => 45,  114 => 44,  111 => 43,  98 => 42,  94 => 41,  72 => 21,  66 => 19,  64 => 18,  58 => 16,  56 => 15,  52 => 14,  48 => 13,  37 => 7,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* */
/* */
/* */
/* */
/* */
/* <link href="catalog/view/javascript/slidecss/jquery.fancybox.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/owl.carousel.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/owl.theme.default.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/salesnotifier.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/simple-line-icons.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/slick.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/slidecss/slick-theme.css" rel="stylesheet" media="screen" />*/
/* */
/* <link href="catalog/view/javascript/slidecss/style-main.css" rel="stylesheet" media="screen" />*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}                         */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <body>*/
/* */
/* */
/* */
/* <div class="container" id="common-header">*/
/*   <header id="header" >*/
/*     <div class="container-fluid">*/
/*       <div class="row flex">*/
/*         <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 logo_header text-right">*/
/*           <a href="{{home}}">*/
/*             */
/*             <img alt="THENO – Minimal &amp; Clean Watch Store Shopify Theme" src="image/catalog/demo/slider/Logo@2x.png" class="img-logo">*/
/*             */
/*           </a>*/
/*         </div>*/
/*         <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">*/
/*           <ul class="nav navbar-nav menu-main" style="margin-top: 35px;font-weight: bold;">*/
/*   */
/*               <li class=" ">*/
/*                 */
/*                   <a href="{{categories[0].href}}" title="Shop" class="delay03 uppercase">SHOP</a>*/
/*         */
/*               </li>*/
/*                 */
/*               <li class=" "> */
/*                   */
/*                     <a href="/" title="About" class="delay03 uppercase">ABOUT</a>*/
/*                   */
/*               </li>*/
/*   */
/*               <li class=" ">*/
/*                 */
/*                   <a href="/" title="Blog" class="delay03 uppercase">WHOLESALE</a>*/
/*                 */
/*               </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 text-right icon-main">*/
/* */
/*           */
/*           <a href="{{ login }}" class="delay03 inline-block hidden-sm hidden-xs" id="btn-login">*/
/*             */
/*             <i class="ms_user"></i>*/
/*             */
/*           </a>*/
/*           */
/*           <a href="{{shopping_cart}}" class="delay03 inline-block text-center icon-cart" id="btn-cart">*/
/*             */
/*             <i class="ms_cart"></i>*/
/*           </a>*/
/*           <a href="" class="delay03 inline-block" id="btn-search">*/
/*             */
/*             <i class="ms_search"></i>*/
/*             */
/*           </a>*/
/*         </div>*/
/*       </div>     */
/*     </div>*/
/*   </header>*/
/* </div>*/
/* */
/* */
/* <style>*/
/*   .img-logo{*/
/*     width:100%;*/
/*   }*/
/*   a {*/
/*       color: #000000;*/
/*   }*/
/*   #common-header{*/
/*     position:relative;*/
/*     z-index:5;*/
/*     margin-top:50px;*/
/*   }*/
/*   #common-home*/
/*   {*/
/*     position:relative;*/
/*     z-index:0;*/
/*     margin-top: -156px;*/
/*   }*/
/*   .ms_user{*/
/*       content: url(image/catalog/demo/slider/002-user@2x.png);*/
/*   }*/
/*   .ms_cart{*/
/*       content: url(image/catalog/demo/slider/003-cart@2x.png);*/
/*   }*/
/*   .ms_search{*/
/*       content: url(image/catalog/demo/slider/001-search@2x.png);   */
/*   }*/
/*   body{*/
/*     */
/*     font-family: Helvetica;*/
/*   }*/
/*   .container{*/
/*     width: 100%;*/
/*   }*/
/*   .nav.navbar-nav.menu-main{*/
/*         margin-top: 68px!important;*/
/*       margin-left: 50px;*/
/*       font-weight: normal!important;*/
/*   }*/
/*   .menu-main li {*/
/*       */
/*       padding-right: 50px;*/
/*   }*/
/*   .navbar-nav.menu-main li a {*/
/*       */
/*       font-size: 18px;*/
/*   }*/
/*   @media (max-width: 767px){*/
/*   .image-logo{*/
/*         width: 130%!important;*/
/*   }*/
/*   .icon-main{*/
/*     text-align: left!important;*/
/*   }*/
/* }*/
/* </style>*/
