
function moins(){
    $quantities = $(".quantité");
    $val = $(".personne")[0].innerHTML;
    $val = Number($val);

    if($val>1){
	    $.each($quantities,function(key, quant){
		    if(quant.firstChild.value==null)
			var quant_val = quant.firstChild.data;
		    else
			var quant_val = quant.firstChild.value;
		    var nums = Number(quant_val);
		    var ty = quant.childNodes[key+1];
		    nums -= nums/$val;
		    if (nums<1 && ty!=null){
			nums = nums*1000;
			if (ty.innerHTML=="kg")
			    ty.innerHTML == "g";
		    }
		    quant.firstChild.value = nums;
		    nums = Math.round(nums*100)/100;
		    quant.firstChild.data = nums.toString(); 
	    });
	    $(".personne")[0].innerHTML = ($val-1).toString();
    }
}

function plus(){
    $quantities = $(".quantité");
    $val = $(".personne")[0].innerHTML;
    $val = Number($val);

    if($val<20){
	    $.each($quantities,function(key, quant){
		    if(quant.firstChild.value==null)
			var quant_val = quant.firstChild.data;
		    else
			var quant_val = quant.firstChild.value;
		    var nums = Number(quant_val);
		    var ty = quant.childNodes[key+1];
		    nums += nums/$val;
		    if (nums>=1000 && ty!=null){
			nums = nums/1000;
			if (ty.innerHTML=="g")
			    ty.innerHTML == "kg";
		    }
		    quant.firstChild.value = nums;
		    nums = Math.round(nums*100)/100;
		    quant.firstChild.data = nums.toString(); 
	    });
	    $(".personne")[0].innerHTML = ($val+1).toString();
    }
}


$(".moins")[0].addEventListener("click",moins,false);
$(".plus")[0].addEventListener("click",plus,false);

