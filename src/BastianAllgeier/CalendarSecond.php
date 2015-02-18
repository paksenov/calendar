<?php
/**
 * Created by PhpStorm.
 * User: aks
 * Date: 18.02.15
 * Time: 16:44
 */

namespace BastianAllgeier;


class CalendarSecond extends CalendarObj {

    function int() {
        return $this->secondINT;
    }

    function next() {
        return $this->plus('1second')->second();
    }

    function prev() {
        return $this->minus('1second')->second();
    }

}