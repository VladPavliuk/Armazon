<?php

/**
 * Class Main.
 * This model return all information about Frame
 *
 */
class Main
{

    /**
     * Makes SQL request to DB.
     * Return array about all profiles information.
     *
     * @return array
     */
    public static function getProfiles()
    {
        $db = DataBase::connect();

        $result = $db->query('SELECT * FROM `profile`');

        $profiles = [];

        $i = 1;

        while($row = $result->fetch()) {

            $profiles[$i]['profile'] = $row['profile'];
            $profiles[$i]['ukr_title'] = $row['ukr_title'];
            $profiles[$i]['upper_ukr_title'] = $row['upper_ukr_title'];

            $i++;
        }
        return $profiles;
    }

    /**
     * Makes SQL request to DB.
     * Return array about all sizes information.
     *
     * @return array
     */
    public static function getSizes()
    {
        $db = DataBase::connect();

        $sortOrder = SIZE_SORT_ORDER ? "ASC" : "DESC" ;
        $result = $db->query("SELECT * FROM `size` ORDER BY `id` {$sortOrder}");

        $sizes = [];

        $i = 1;

        while($row = $result->fetch()) {
            $sizes[$i]['size'] = $row['size'];
            $sizes[$i]['leonardo_prices'] = $row['leonardo_prices'];
            $sizes[$i]['frodo_prices'] = $row['frodo_prices'];
            $sizes[$i]['back_leg'] = $row['back_leg'];
            $sizes[$i]['image_size'] = $row['image_size'];

            $i++;
        }
        return $sizes;
    }

    /**
     * Makes SQL request to DB.
     * Return array about all colors information.
     *
     * @return array
     */
    public static function getColors()
    {
        $db = DataBase::connect();

        $result = $db->query('SELECT * FROM `color`');

        $colors = [];

        $i = 1;

        while($row = $result->fetch()) {
            $colors[$i]['color'] = $row['color'];
            $colors[$i]['ukr_title'] = $row['ukr_title'];
            $colors[$i]['upper_ukr_title'] = $row['upper_ukr_title'];
            $colors[$i]['default'] = $row['default'];

            $i++;
        }
        return $colors;
    }
}