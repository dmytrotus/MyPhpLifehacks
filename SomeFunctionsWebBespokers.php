<?php
///webbbespokers


class SomeFunctionsWebBespokers
{
    public function index()
    {	

    	///////////some for testing PHP code
    	$prices = [100,400,200];
    	$discount = 20;

    	if($discount < 0 || $discount > 100){
    		return 'enter correct discount';
    	}
    	foreach ($prices as $price) {
    		if($price < 0 || $price > 100000){
	    		return 'enter correct price';
	    	}
    	}
    	if(count($prices) < 0 || count($prices) > 100)
		{
			return 'products count is too big';
		}
    	
    	$max_price = max($prices);
    	$discount_value = (100 - $discount) / 100;
    	$changed_price = $max_price * $discount_value;

    	//remove from array
    	$prices = array_diff($prices, [$max_price]);
    	$prices[] = $changed_price;



    	$result = array_sum($prices);
    	$result = floor($result);




    	return $result;
    }


    public function index2()
    {
    	$firststword = 'acb';
    	$secondword = 'bca';

    	$array_words = [$firststword, $secondword];

    	foreach($array_words as $word)
    	$firststword = strtolower($firststword);
    	$secondword = strtolower($secondword);

    	$array1 = str_split($firststword);
    	$array2 = str_split($secondword);

    	$diff = array_diff($array1, $array2);
    	$diff1 = array_diff($array2, $array1);

    	if(empty($diff1) && empty($diff2))
    	{
    		return 'true';
    	} else {
    		return 'false';
    	}
    }
}
