<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.sidebar_menu' shared service.

return $this->services['sonata.admin.sidebar_menu'] = ${($_ = isset($this->services['sonata.admin.menu_builder']) ? $this->services['sonata.admin.menu_builder'] : $this->load('getSonata_Admin_MenuBuilderService.php')) && false ?: '_'}->createSidebarMenu();
