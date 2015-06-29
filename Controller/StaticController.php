<?php

namespace BeAdopt\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticController extends Controller
{
    public function pageAction(Request $request, $page)
    {
        $locale = $request->attributes->get('_locale');
        
        $template = $this->container->getParameter( 'beadopt.core.static_page.resources' );
        $template_extend = $this->container->getParameter( 'beadopt.core.static_page.template_extend' );
        
        return $this->render($template . $locale . '/' . $page . '.html.twig', array('template_extend' => $template_extend));
    }
}