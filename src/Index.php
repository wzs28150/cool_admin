<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wzs
 * @Date: 2020-03-20 14:58:40
 * @LastEditors: sueRimn
 * @LastEditTime: 2020-03-20 15:03:15
 */
namespace wzs\cooladmin;

use wzs\cooladmin\Traits\Load;

class Index
{
    use Load;

    public $topMenu = [];

    public $menu = [];

    public $userName = '';

    public $userMenu = []; // title  href  attr

    public $topRightMenu = []; // top right menu

    public $tmpl = 'index';

    public $firstTabName = '';

    public $firstTabUrl = '';

    public $logo = '';

    public $sLogo = '';

    public $child = 0;

    public function userMenu($title, $href = '', $attr = [])
    {
        $this->userMenu[] = [
            'title' => $title,
            'href'  => $href,
            'attr'  => $attr,
        ];

        return $this;
    }

    public function topRightMenu($title, $href = '', $text = '', $attr = [])
    {
        $text = $text ? $text : $title;
        $this->userMenu[] = [
            'title' => $title,
            'text'  => $text,
            'href'  => $href,
            'attr'  => $attr,
        ];

        return $this;
    }

    public function menu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    public function child($title, $href = '', $icon = '', $attr = [])
    {
        $this->menu[$this->child]['child'] = [
            'title' => $title,
            'icon'  => $icon,
            'href'  => $href,
            'attr'  => $attr,
        ];

        return $this;
    }

    public function init()
    {
        $this->builder->module('element');
        $this->builder->script('admin', [
            'element.render();',
            'admin.changeAdminTab(element);',
            'admin.prevAdminTab();',
            'admin.nextAdminTab();',
            'admin.bindCloseTab();',
        ]);
    }
}
