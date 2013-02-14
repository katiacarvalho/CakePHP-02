<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));
        

	Router::connect('/onde', array('controller' => 'pages', 'action' => 'display', 'como-chegar'));        
	Router::connect('/sobre', array('controller' => 'pages', 'action' => 'display', 'sobre-o-evento'));
        Router::connect('/obrigada', array('controller' => 'pages', 'action' => 'display', 'agradecimento'));
        Router::connect('/inscricao', array('controller' => 'Inscricoes'));
        Router::connect('/palestras', array('controller' => 'Palestras', 'action' => 'index'));
        Router::connect('/palestrantes', array('controller' => 'Palestrantes', 'action' => 'index'));        
        Router::connect('/palestrantes/:nome/:id', array(
            'controller' => 'Palestrantes', 'action' => 'view'), array(
            'pass' => array('id'), //passa o id para a action | lista de valores da url que estar passando para a action
            'id' => '[0-9]+' ) );
        Router::connect('/painel', array('controller' => 'Inscricoes', 'action' => 'index'));
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
