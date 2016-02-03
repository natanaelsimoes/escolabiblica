<?php

use lib\util\module;

return module\Module::createInstance()
                ->setName('Equipe')                
                ->setDescription('')
                ->addAuthor(module\Author::createInstance()
                        ->setName('Natanael Simões')
                        ->setEmail('natanael.simoes@ifro.edu.br'))
                ->setVersion('1.0')
                ->setCreationDate('2015-08-31')
                ->setLastReleaseDate('2015-08-31')
                ->addAccess('ADMINISTRATOR')
                ->setTile(module\Tile::createInstance()
                        ->setColor('concrete')
                        ->setIcon('fa-user'))
                ->setHome(module\Home::createInstance()
                        ->setControl('EquipeController')
                        ->setAction('Manage'))
                ->addController(module\Controller::createInstance()
                        ->setName('EquipeController'));
