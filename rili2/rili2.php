<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/13
 * Time: 18:47
 */
        class Rili{
            private $year;
            private $month;
            private $days;
            private $weeksnum;
            public function __construct()
            {
                $this->year=$_GET['year']?$_GET['year']:date('Y');
                $this->month=$_GET['month']?$_GET['month']:date('m');
//                echo $this->month;
//                die();
                $this->days=date('t',mktime(0,0,0,$this->month,1,$this->year));
                $this->weeksnum=date('w',mktime(0,0,0,$this->month,1,$this->year));
            }

            public function out(){
                echo "<table align='center'>";
                $this->changedays();
                $this->weekList();
                $this->daysList();
                echo "</table>";
            }
            public function weekList(){
                $weeks = array('日','一','二','三','四','五','六');
                echo "<tr>";
               for($i=0;$i<count($weeks);$i++){
                   echo "<th class='fontb'>".$weeks[$i]."</th>";
               }

                echo "</tr>";
            }

            public function daysList(){
                echo "<tr>";
                for($j=0;$j<$this->weeksnum;$j++){
                    echo "<td>"."&nbsp;"."</td>";
                }
                for($k=1;$k<=$this->days;$k++){
                    $j++;
                    if($k==date('d')){
                        echo "<td class='fontb'>".$k."</td>";
                    }else{
                        echo "<td>".$k."</td>";
                    }
                    if($j%7==0){
                        echo "</tr><tr>";
                    }
                }
                echo "</tr>";
            }
            public function prevYear($year,$month){
                $year=$year-1;
                if($year<=1970){
                    $year=1970;
                }
                return "year=$year&month=$month";

            }
            public function prevMonth($year,$month){
                $month=$month-1;
                if($month==0){
                    $month=12;

                    $year=$year-1;
                }
                return "year=$year&month=$month";
            }
            public function nextYear($year,$month){
                $year=$year+1;
                if($year>=2038){
                    $year=2038;
                }
                return "year=$year&month=$month";
            }
            public function nextMonth($year,$month){
                $month++;
                if($month==13){
                    $month=1;
                    $year=$year+1;
                }
                return "year=$year&month=$month";
            }
            public function changedays(){
                echo "<tr>";
                echo "<td><a href='?".$this->prevYear($this->year,$this->month)."'><<</a></td>";
                echo "<td><a href='?".$this->prevMonth($this->year,$this->month)."'><</a></td>";
                echo "<td colspan='3'>".$this->year."年".$this->month."月"."</td>";
                echo "<td><a href='?".$this->nextMonth($this->year,$this->month)."'>></a></td>";
                echo "<td><a href='?".$this->nextYear($this->year,$this->month)."'>>></a></td>";
                echo "</tr>";
            }



        }
?>