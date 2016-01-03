<?php

namespace App\Helpers;

class Tree
{
    public static function make(array $array, $no = 0)
    {
        $child = Tree::hasChildren($array, $no);

        if (empty($child))
            return "";

        $content = "<ul>\n";

        foreach ( $child as $value )
        {
            $content .= sprintf("\t<li><a href=\"". route('admin.category.show', $value['id']) ."\">%s</a></li>\n", $value['name']);
            $content .= Tree::make($array, $value['id']);
        }

        $content .= "</ul>\n";

        return $content;
    }

    public static function hasChildren($array, $id)
    {
        return array_filter($array, function ($var) use($id) {
            return $var['parent_id'] == $id;
        });
    }
}
