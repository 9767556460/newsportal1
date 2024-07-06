<?php
/*
* Nepali Date Class
*/
class Nepali_Date
{
    // Data for nepali date
    private $_bs = array(
        0 => array(2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        1 => array(2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        2 => array(2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        3 => array(2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        4 => array(2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        5 => array(2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        6 => array(2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        7 => array(2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        8 => array(2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        9 => array(2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        10 => array(2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        11 => array(2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        12 => array(2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        13 => array(2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        14 => array(2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        15 => array(2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        16 => array(2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        17 => array(2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        18 => array(2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        19 => array(2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        20 => array(2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        21 => array(2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        22 => array(2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        23 => array(2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        24 => array(2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        25 => array(2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        26 => array(2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        27 => array(2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        28 => array(2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        29 => array(2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        30 => array(2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        31 => array(2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        32 => array(2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        33 => array(2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        34 => array(2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        35 => array(2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        36 => array(2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        37 => array(2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        38 => array(2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        39 => array(2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        40 => array(2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        41 => array(2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        42 => array(2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        43 => array(2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        44 => array(2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        45 => array(2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        46 => array(2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        47 => array(2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        48 => array(2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        49 => array(2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        50 => array(2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        51 => array(2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        52 => array(2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        53 => array(2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        54 => array(2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        55 => array(2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        56 => array(2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        57 => array(2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        58 => array(2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        59 => array(2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        60 => array(2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        61 => array(2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        62 => array(2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31),
        63 => array(2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        64 => array(2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        65 => array(2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        66 => array(2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        67 => array(2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        68 => array(2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        69 => array(2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        70 => array(2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        71 => array(2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        72 => array(2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        73 => array(2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        74 => array(2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        75 => array(2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        76 => array(2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        77 => array(2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        78 => array(2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        79 => array(2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        80 => array(2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        81 => array(2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        82 => array(2082, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        83 => array(2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        84 => array(2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        85 => array(2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        86 => array(2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        87 => array(2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30),
        88 => array(2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        89 => array(2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        90 => array(2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30)
    );

    private $_nep_date = array('year' => '', 'month' => '', 'date' => '', 'day' => '', 'nmonth' => '', 'num_day' => '');
    private $_eng_date = array('year' => '', 'month' => '', 'date' => '', 'day' => '', 'emonth' => '', 'num_day' => '');
    public $debug_info = "";

    /**
     * Return day
     *
     * @param int $day
     * @return string
     */
    private function _get_day_of_week($day)
    {
        switch ($day) {
            case 1:
                $day = "आईतवार";
                break;
            case 2:
                $day = "सोमबार";
                break;
            case 3:
                $day = "मंगलवार";
                break;
            case 4:
                $day = "बुधबार";
                break;
            case 5:
                $day = "बिहीबार";
                break;
            case 6:
                $day = "शुक्रबार";
                break;
            case 7:
                $day = "शनिबार";
                break;
        }
        return $day;
    }

    /**
     * Return english month name
     *
     * @param int $m
     * @return string
     */
    private function _get_english_month($m)
    {
        $eMonth = FALSE;
        switch ($m) {
            case 1:
                $eMonth = "January";
                break;
            case 2:
                $eMonth = "February";
                break;
            case 3:
                $eMonth = "March";
                break;
            case 4:
                $eMonth = "April";
                break;
            case 5:
                $eMonth = "May";
                break;
            case 6:
                $eMonth = "June";
                break;
            case 7:
                $eMonth = "July";
                break;
            case 8:
                $eMonth = "August";
                break;
            case 9:
                $eMonth = "September";
                break;
            case 10:
                $eMonth = "October";
                break;
            case 11:
                $eMonth = "November";
                break;
            case 12:
                $eMonth = "December";
        }
        return $eMonth;
    }

    /**
     * Return nepali month name
     *
     * @param int $m
     * @return string
     */
    private function _get_nepali_month($m)
    {
        $n_month = FALSE;
        switch ($m) {
            case 1:
                $n_month = "बैशाख";
                break;
            case 2:
                $n_month = "जेष्ठ";
                break;
            case 3:
                $n_month = "असार";
                break;
            case 4:
                $n_month = "श्रावण";
                break;
            case 5:
                $n_month = "भाद्र";
                break;
            case 6:
                $n_month = "आश्विन";
                break;
            case 7:
                $n_month = "कार्तिक";
                break;
            case 8:
                $n_month = "मंसिर";
                break;
            case 9:
                $n_month = "पुष";
                break;
            case 10:
                $n_month = "माघ";
                break;
            case 11:
                $n_month = "फाल्गुन";
                break;
            case 12:
                $n_month = "चैत्र";
                break;
        }
        return $n_month;
    }
    
    private function _get_nepali_date($day){
        $n_date = FALSE;
        switch($day){
            case 1:
                $n_date = "१";
                break;
            case 2:
                $n_date = "२";
                break;
            case 3:
                $n_date = "३";
                break;
            case 4:
                $n_date = "४";
                break;
            case 5:
                $n_date = "५";
                break;
            case 6:
                $n_date = "६";
                break;
            case 7:
                $n_date = "७";
                break;
            case 8:
                $n_date = "८";
                break;
            case 9:
                $n_date = "९";
                break;
            case 10:
                $n_date = "१०";
                break;
            case 11:
                $n_date = "११";
                break;
            case 12:
                $n_date = "१२";
                break;
            case 13:
                $n_date = "१३";
                break;
            case 14:
                $n_date = "१४";
                break;
            case 15:
                $n_date = "१५";
                break;
            case 16:
                $n_date = "१६";
                break;
            case 17:
                $n_date = "१७";
                break;
            case 18:
                $n_date = "१८";
                break;
            case 19:
                $n_date = "१९";
                break;
            case 20:
                $n_date = "२०";
                break;
            case 21:
                $n_date = "२१";
                break;
            case 22:
                $n_date = "२२";
                break;
            case 23:
                $n_date = "२३";
                break;
            case 24:
                $n_date = "२४";
                break;
            case 25:
                $n_date = "२५";
                break;
            case 26:
                $n_date = "२६";
                break;
            case 27:
                $n_date = "२७";
                break;
            case 28:
                $n_date = "२८";
                break;
            case 29:
                $n_date = "२९";
                break;
            case 30:
                $n_date = "३०";
                break;
            case 31:
                $n_date = "३१";
                break;
        }
        return $n_date;
    }
    private function _get_nepali_years($year){
        $n_year = FALSE;
        switch($year){
            case 2080:
            $n_year = "२०८०";
            break;
            case 2081:
            $n_year = "२०८१";
            break;
            case 2082:
            $n_year = "२०८२";
            break;
            case 2083:
            $n_year = "२०८३";
            break;
            case 2084:
            $n_year = "२०८४";
            break;
            case 2085:
            $n_year = "२०८५";
            break;
            case 2086:
            $n_year = "२०८६";
            break;
            case 2087:
            $n_year = "२०८७";
            break;
            case 2088:
            $n_year = "२०८८";
            break;
            case 2089:
            $n_year = "२०८९";
            break;
            case 2090:
            $n_year = "२०९०";
            break;
            case 2091:
            $n_year = "२०९१";
            break;
            case 2092:
            $n_year = "२०९२";
            break;
            case 2093:
            $n_year = "२०९३";
            break;
            case 2094:
            $n_year = "२०९४";
            break;
            case 2095:
            $n_year = "२०९५";
            break;
            case 2096:
            $n_year = "२०९६";
            break;
            case 2097:
            $n_year = "२०९७";
            break;
            case 2098:
            $n_year = "२०९८";
            break;
            case 2099:
            $n_year = "२०९९";
            break;
            case 2100:
            $n_year = "२१००";
            break;
            case 2101:
            $n_year = "२१०१";
            break;
            case 2102:
            $n_year = "२१०२";
            break;
            case 2103:
            $n_year = "२१०३";
            break;
            case 2104:
            $n_year = "२१०४";
            break;
            case 2105:
            $n_year = "२१०५";
            break;
            case 2106:
            $n_year = "२१०६";
            break;
            case 2107:
            $n_year = "२१०७";
            break;
            case 2108:
            $n_year = "२१०८";
            break;
            case 2109:
            $n_year = "२१०९";
            break;
            case 2110:
            $n_year = "२११०";
            break;
            case 2111:
            $n_year = "२१११";
            break;
            case 2112:
            $n_year = "२११२";
            break;
            case 2113:
            $n_year = "२११३";
            break;
            case 2114:
            $n_year = "२११४";
            break;
            case 2115:
            $n_year = "२११५";
            break;
            case 2116:
            $n_year = "२११६";
            break;
            case 2117:
            $n_year = "२११७";
            break;
            case 2118:
            $n_year = "२११८";
            break;
            case 2119:
            $n_year = "२११९";
            break;
            case 2120:
            $n_year = "२१२०";
            break;
        }
        return $n_year;
    }

    /**
     * Check if date range is in english
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     * @return bool
     */
    private function _is_in_range_eng($yy, $mm, $dd)
    {
        if ($yy < 1944 || $yy > 2033) {
            return 'Supported only between 1944-2022';
        }
        if ($mm < 1 || $mm > 12) {
            return 'Error! month value can be between 1-12 only';
        }
        if ($dd < 1 || $dd > 31) {
            return 'Error! day value can be between 1-31 only';
        }
        return TRUE;
    }

    /**
     * Check if date is with in nepali data range
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     * @return bool
     */
    private function _is_in_range_nep($yy, $mm, $dd)
    {
        if ($yy < 2000 || $yy > 2090) {
            return 'Supported only between 2000-2089';
        }
        if ($mm < 1 || $mm > 12) {
            return 'Error! month value can be between 1-12 only';
        }
        if ($dd < 1 || $dd > 32) {
            return 'Error! day value can be between 1-31 only';
        }
        return TRUE;
    }

    /**
     * Calculates wheather english year is leap year or not
     *
     * @param int $year
     * @return bool
     */
    public function is_leap_year($year)
    {
        $a = $year;
        if ($a % 100 == 0) {
            if ($a % 400 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            if ($a % 4 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    /**
     * currently can only calculate the date between AD 1944-2033...
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     * @return array
     */
    public function eng_to_nep($yy, $mm, $dd)
    {
        // Check for date range
        $chk = $this->_is_in_range_eng($yy, $mm, $dd);
        if ($chk !== TRUE) {
            die($chk);
        } else {
            // Month data.
            $month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

            // Month for leap year
            $lmonth = array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            $def_eyy = 1944;    // initial english date.
            $def_nyy = 2000;
            $def_nmm = 9;
            $def_ndd = 17 - 1;    // inital nepali date.
            $total_eDays = 0;
            $total_nDays = 0;
            $a = 0;
            $day = 7 - 1;
            $m = 0;
            $y = 0;
            $i = 0;
            $j = 0;
            $numDay = 0;
            // Count total no. of days in-terms year
            for ($i = 0; $i < ($yy - $def_eyy); $i++) //total days for month calculation...(english)
            {
                if ($this->is_leap_year($def_eyy + $i) === TRUE) {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $lmonth[$j];
                    }
                } else {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $month[$j];
                    }
                }
            }
            // Count total no. of days in-terms of month
            for ($i = 0; $i < ($mm - 1); $i++) {
                if ($this->is_leap_year($yy) === TRUE) {
                    $total_eDays += $lmonth[$i];
                } else {
                    $total_eDays += $month[$i];
                }
            }
            // Count total no. of days in-terms of date
            $total_eDays += $dd;
            $i = 0;
            $j = $def_nmm;
            $total_nDays = $def_ndd;
            $m = $def_nmm;
            $y = $def_nyy;
            // Count nepali date from array
            while ($total_eDays != 0) {
                $a = $this->_bs[$i][$j];

                $total_nDays++;        //count the days
                $day++;                //count the days interms of 7 days
                if ($total_nDays > $a) {
                    $m++;
                    $total_nDays = 1;
                    $j++;
                }

                if ($day > 7) {
                    $day = 1;
                }

                if ($m > 12) {
                    $y++;
                    $m = 1;
                }

                if ($j > 12) {
                    $j = 1;
                    $i++;
                }

                $total_eDays--;
            }
            $numDay = $day;
            $this->_nep_date['year'] = $this->_get_nepali_years($y);
            $this->_nep_date['month'] = $m;
            $this->_nep_date['date'] = $this->_get_nepali_date($total_nDays);
            $this->_nep_date['day'] = $this->_get_day_of_week($day);
            $this->_nep_date['nmonth'] = $this->_get_nepali_month($m);
            $this->_nep_date['num_day'] = $numDay;
            return $this->_nep_date;
        }
    }

    /**
     * Currently can only calculate the date between BS 2000-2089
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     * @return array
     */
    public function nep_to_eng($yy, $mm, $dd)
    {
        $def_eyy = 1943;
        $def_emm = 4;
        $def_edd = 14 - 1;    // initial english date.
        $def_nyy = 2000;
        $def_nmm = 1;
        $def_ndd = 1;        // iniital equivalent nepali date.
        $total_eDays = 0;
        $total_nDays = 0;
        $a = 0;
        $day = 4 - 1;
        $m = 0;
        $y = 0;
        $i = 0;
        $k = 0;
        $numDay = 0;
        $month = array(
            0,
            31,
            28,
            31,
            30,
            31,
            30,
            31,
            31,
            30,
            31,
            30,
            31
        );
        $lmonth = array(
            0,
            31,
            29,
            31,
            30,
            31,
            30,
            31,
            31,
            30,
            31,
            30,
            31
        );
        // Check for date range
        $chk = $this->_is_in_range_nep($yy, $mm, $dd);
        if ($chk !== TRUE) {
            die($chk);
        } else {
            // Count total days in-terms of year
            for ($i = 0; $i < ($yy - $def_nyy); $i++) {
                for ($j = 1; $j <= 12; $j++) {
                    $total_nDays += $this->_bs[$k][$j];
                }
                $k++;
            }
            // Count total days in-terms of month
            for ($j = 1; $j < $mm; $j++) {
                $total_nDays += $this->_bs[$k][$j];
            }
            // Count total days in-terms of dat
            $total_nDays += $dd;
            // Calculation of equivalent english date...
            $total_eDays = $def_edd;
            $m = $def_emm;
            $y = $def_eyy;
            while ($total_nDays != 0) {
                if ($this->is_leap_year($y)) {
                    $a = $lmonth[$m];
                } else {
                    $a = $month[$m];
                }
                $total_eDays++;
                $day++;
                if ($total_eDays > $a) {
                    $m++;
                    $total_eDays = 1;
                    if ($m > 12) {
                        $y++;
                        $m = 1;
                    }
                }
                if ($day > 7) {
                    $day = 1;
                }
                $total_nDays--;
            }

            $numDay = $day;
            $this->_eng_date['year'] = $this->_get_nepali_years($y);
            $this->_eng_date['month'] = $m;
            $this->_eng_date['date'] = $this->_get_nepali_date($total_eDays);
            $this->_eng_date['day'] = $this->_get_day_of_week($day);
            $this->_eng_date['nmonth'] = $this->_get_english_month($m);
            $this->_eng_date['num_day'] = $numDay;
            return $this->_eng_date;
        }
    }

    function convert_to_nepali_number($str)
    {
        $str = strval($str);
        $array = array(0 => '&#2406;',
            1 => '&#2407;',
            2 => '&#2408;',
            3 => '&#2409;',
            4 => '&#2410;',
            5 => '&#2411;',
            6 => '&#2412;',
            7 => '&#2413;',
            8 => '&#2414;',
            9 => '&#2415;',
            /*'.'=>'&#2404;'*/
        );
        $utf = "";
        $cnt = strlen($str);
        for ($i = 0; $i < $cnt; $i++) {
            if (!isset($array[$str[$i]])) {
                $utf .= $str[$i];
            } else
                $utf .= $array[$str[$i]];
        }
        return $utf;
    }
}