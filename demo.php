<?php
require_once{"java/util/Scanner.php"};
class Greeds {
	protected static $mba;
	protected static $ans;
	protected static $choices;
	protected static $ans1;
	protected static $questions;
	protected static $opt1;
	protected static $opt2;
	protected static $opt3;
	public static function __staticinit(){
		self::$mba = 0;
		self::$questions = "How good are you in math ?","How good is your managerial skills ?","How good are you at presenting yourself ?","Do you like talking to new people","How do you like solving problem ?","Do you like to know how gadgets work ?","Where do you prefer to live ?";
		self::$opt1 = "Very good","Expert","Fair","Very much","Very little","Very little","India";
		self::$opt2 = "Good","Fairly good","Good","Little","Little","A lot","Abroad";
		self::$opt3 = "Fair","Good","Expert","Very little","A lot","Little","    ";

	}
	public static function display($n){
		$System->out->println((((($n + 1)) . ". ") + self::$questions[$n]));
		$System->out->println(("a) " . self::$opt1[$n]));
		$System->out->println(("b) " . self::$opt2[$n]));
		if (($n!=6))
			$System->out->println(("c) " . self::$opt3[$n]));
	}
	public static function main ($args)
{
	$ss= new Scanner($System->in);
	for($i=0 ; ($i <= 5); ++$i)
	{
		Greeds::display($i);
		$System->out->println("please enter your choice a (or) b(or) c");
		self::$ans=$ss->next()->charAt(0);
		if((self::$ans . 'a'))
		{
			++self::$mba;
		}
		else if(self::$ans . 'b')
		{
			++$ms_mtech;
		}
		else if(self::$ans . 'c')
		{
			++$mca;
		}
		else
		{
			$System->out->println("please enter a valid option");
			--$i;
			continue;

		}
	}
	if(((self::$mba>$ms_mtech)&&(self::$mba>$mca)))
	{
		self::$choice="MBA";
	}
	else if((($mca>$ms_mtech)&&($mca>self::$mba)))
	{
		self::$choice="MCA";
	}
	else
	{
		self::$choice="MS-MTECH";
		Greeds::display(6);
		self::$ans=$ss->next()->charAt(0);
		if(self::$choice->equals"MS_MTECH")
		{
			if(self::$ans.'a')
			{
				self::$choice="MTECH";
			}
			else if(self::$ans.'b')
			{
				self::$choice="MS";
			}
		}
	
	$System->out->println("best cource suitable for you is:",self::$choice);
}
}
Greeds::__staticinit();
?> 
