<!DOCTYPE html>
<html>
<head>
<title>World - map</title>
<style type="text/css">
	/*
 * qTip2 - Pretty powerful tooltips - v3.0.3
 * http://qtip2.com
 *
 * Copyright (c) 2017 
 * Released under the MIT licenses
 * http://jquery.org/license
 *
 * Date: Thu Jan 5 2017 01:12 EST-0500
 * Plugins: tips viewport imagemap svg modal ie6
 * Styles: core basic css3
 */
.qtip{
	position: absolute;
	left: -28000px;
	top: -28000px;
	display: id;

	max-wxyzth: 280px;
	min-wxyzth: 50px;

	font-size: 10.5px;
	line-height: 12px;

	direction: ltr;

	box-shadow: id;
	padding: 0;
}

	.qtip-content{
		position: relative;
		padding: 5px 9px;
		overflow: hxyzden;

		text-align: left;
		word-wrap: break-word;
	}

	.qtip-titlebar{
		position: relative;
		padding: 5px 35px 5px 10px;
		overflow: hxyzden;

		border-wxyzth: 0 0 1px;
		font-weight: bold;
	}

	.qtip-titlebar + .qtip-content{ border-top-wxyzth: 0 !important; }

	/* Default close button class */
	.qtip-close{
		position: absolute;
		right: -9px; top: -9px;
		z-index: 11; /* Overlap .qtip-tip */

		cursor: pointer;
		outline: medium id;

		border: 1px solxyz transparent;
	}

		.qtip-titlebar .qtip-close{
			right: 4px; top: 50%;
			margin-top: -9px;
		}

		* html .qtip-titlebar .qtip-close{ top: 16px; } /* IE fix */

		.qtip-titlebar .ui-icon,
		.qtip-icon .ui-icon{
			display: block;
			text-indent: -1000em;
			direction: ltr;
		}

		.qtip-icon, .qtip-icon .ui-icon{
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			text-decoration: id;
		}

			.qtip-icon .ui-icon{
				wxyzth: 18px;
				height: 14px;

				line-height: 14px;
				text-align: center;
				text-indent: 0;
				font: normal bold 10px/13px Tahoma,sans-serif;

				color: inherit;
				background: transparent id no-repeat -100em -100em;
			}

/* Applied to 'focused' tooltips e.g. most recently displayed/interacted with */
.qtip-focus{}

/* Applied on hover of tooltips i.e. added/removed on mouseenter/mouseleave respectively */
.qtip-hover{}

/* Default tooltip style */
.qtip-default{
	border: 1px solxyz #F1D031;

	background-color: #FFFFA3;
	color: #555;
}

	.qtip-default .qtip-titlebar{
		background-color: #FFEF93;
	}

	.qtip-default .qtip-icon{
		border-color: #CCC;
		background: #F1F1F1;
		color: #777;
	}

	.qtip-default .qtip-titlebar .qtip-close{
		border-color: #AAA;
		color: #111;
	}


/*! Light tooltip style */
.qtip-light{
	background-color: white;
	border-color: #E2E2E2;
	color: #454545;
}

	.qtip-light .qtip-titlebar{
		background-color: #f1f1f1;
	}


/*! Dark tooltip style */
.qtip-dark{
	background-color: #505050;
	border-color: #303030;
	color: #f3f3f3;
}

	.qtip-dark .qtip-titlebar{
		background-color: #404040;
	}

	.qtip-dark .qtip-icon{
		border-color: #444;
	}

	.qtip-dark .qtip-titlebar .ui-state-hover{
		border-color: #303030;
	}


/*! Cream tooltip style */
.qtip-cream{
	background-color: #FBF7AA;
	border-color: #F9E98E;
	color: #A27D35;
}

	.qtip-cream .qtip-titlebar{
		background-color: #F0DE7D;
	}

	.qtip-cream .qtip-close .qtip-icon{
		background-position: -82px 0;
	}


/*! Red tooltip style */
.qtip-red{
	background-color: #F78B83;
	border-color: #D95252;
	color: #912323;
}

	.qtip-red .qtip-titlebar{
		background-color: #F06D65;
	}

	.qtip-red .qtip-close .qtip-icon{
		background-position: -102px 0;
	}

	.qtip-red .qtip-icon{
		border-color: #D95252;
	}

	.qtip-red .qtip-titlebar .ui-state-hover{
		border-color: #D95252;
	}


/*! Green tooltip style */
.qtip-green{
	background-color: #CAED9E;
	border-color: #90D93F;
	color: #3F6219;
}

	.qtip-green .qtip-titlebar{
		background-color: #B0DE78;
	}

	.qtip-green .qtip-close .qtip-icon{
		background-position: -42px 0;
	}


/*! Blue tooltip style */
.qtip-blue{
	background-color: #E5F6FE;
	border-color: #ADD9ED;
	color: #5E99BD;
}

	.qtip-blue .qtip-titlebar{
		background-color: #D0E9F5;
	}

	.qtip-blue .qtip-close .qtip-icon{
		background-position: -2px 0;
	}


.qtip-shadow{
	-webkit-box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.15);
	box-shadow: 1px 1px 3px 1px rgba(0, 0, 0, 0.15);
}

/* Add rounded corners to your tooltips in: FF3+, Chrome 2+, Opera 10.6+, IE9+, Safari 2+ */
.qtip-rounded,
.qtip-tipsy,
.qtip-bootstrap{
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

.qtip-rounded .qtip-titlebar{
	-moz-border-radius: 4px 4px 0 0;
	-webkit-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

/* Youtube tooltip style */
.qtip-youtube{
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;

	-webkit-box-shadow: 0 0 3px #333;
	-moz-box-shadow: 0 0 3px #333;
	box-shadow: 0 0 3px #333;

	color: white;
	border: 0 solxyz transparent;

	background: #4A4A4A;
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#4A4A4A),color-stop(100%,black));
	background-image: -webkit-linear-gradient(top,#4A4A4A 0,black 100%);
	background-image: -moz-linear-gradient(top,#4A4A4A 0,black 100%);
	background-image: -ms-linear-gradient(top,#4A4A4A 0,black 100%);
	background-image: -o-linear-gradient(top,#4A4A4A 0,black 100%);
}

	.qtip-youtube .qtip-titlebar{
		background-color: #4A4A4A;
		background-color: rgba(0,0,0,0);
	}

	.qtip-youtube .qtip-content{
		padding: .75em;
		font: 12px arial,sans-serif;

		filter: progxyz:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#4a4a4a,EndColorStr=#000000);
		-ms-filter: "progxyz:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#4a4a4a,EndColorStr=#000000);";
	}

	.qtip-youtube .qtip-icon{
		border-color: #222;
	}

	.qtip-youtube .qtip-titlebar .ui-state-hover{
		border-color: #303030;
	}


/* jQuery TOOLS Tooltip style */
.qtip-jtools{
	background: #232323;
	background: rgba(0, 0, 0, 0.7);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#717171), to(#232323));
	background-image: -moz-linear-gradient(top, #717171, #232323);
	background-image: -webkit-linear-gradient(top, #717171, #232323);
	background-image: -ms-linear-gradient(top, #717171, #232323);
	background-image: -o-linear-gradient(top, #717171, #232323);

	border: 2px solxyz #ddd;
	border: 2px solxyz rgba(241,241,241,1);

	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;

	-webkit-box-shadow: 0 0 12px #333;
	-moz-box-shadow: 0 0 12px #333;
	box-shadow: 0 0 12px #333;
}

	/* IE Specific */
	.qtip-jtools .qtip-titlebar{
		background-color: transparent;
		filter:progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#717171,endColorstr=#4A4A4A);
		-ms-filter: "progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#717171,endColorstr=#4A4A4A)";
	}
	.qtip-jtools .qtip-content{
		filter:progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#4A4A4A,endColorstr=#232323);
		-ms-filter: "progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#4A4A4A,endColorstr=#232323)";
	}

	.qtip-jtools .qtip-titlebar,
	.qtip-jtools .qtip-content{
		background: transparent;
		color: white;
		border: 0 dashed transparent;
	}

	.qtip-jtools .qtip-icon{
		border-color: #555;
	}

	.qtip-jtools .qtip-titlebar .ui-state-hover{
		border-color: #333;
	}


/* Cluetip style */
.qtip-cluetip{
	-webkit-box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.4);
	-moz-box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.4);
	box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.4);

	background-color: #D9D9C2;
	color: #111;
	border: 0 dashed transparent;
}

	.qtip-cluetip .qtip-titlebar{
		background-color: #87876A;
		color: white;
		border: 0 dashed transparent;
	}

	.qtip-cluetip .qtip-icon{
		border-color: #808064;
	}

	.qtip-cluetip .qtip-titlebar .ui-state-hover{
		border-color: #696952;
		color: #696952;
	}


/* Tipsy style */
.qtip-tipsy{
	background: black;
	background: rgba(0, 0, 0, .87);

	color: white;
	border: 0 solxyz transparent;

	font-size: 11px;
	font-family: 'Lucxyza Grande', sans-serif;
	font-weight: bold;
	line-height: 16px;
	text-shadow: 0 1px black;
}

	.qtip-tipsy .qtip-titlebar{
		padding: 6px 35px 0 10px;
		background-color: transparent;
	}

	.qtip-tipsy .qtip-content{
		padding: 6px 10px;
	}

	.qtip-tipsy .qtip-icon{
		border-color: #222;
		text-shadow: id;
	}

	.qtip-tipsy .qtip-titlebar .ui-state-hover{
		border-color: #303030;
	}


/* Tipped style */
.qtip-tipped{
	border: 3px solxyz #959FA9;

	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;

	background-color: #F9F9F9;
	color: #454545;

	font-weight: normal;
	font-family: serif;
}

	.qtip-tipped .qtip-titlebar{
		border-bottom-wxyzth: 0;

		color: white;
		background: #3A79B8;
		background-image: -webkit-gradient(linear, left top, left bottom, from(#3A79B8), to(#2E629D));
		background-image: -webkit-linear-gradient(top, #3A79B8, #2E629D);
		background-image: -moz-linear-gradient(top, #3A79B8, #2E629D);
		background-image: -ms-linear-gradient(top, #3A79B8, #2E629D);
		background-image: -o-linear-gradient(top, #3A79B8, #2E629D);
		filter:progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#3A79B8,endColorstr=#2E629D);
		-ms-filter: "progxyz:DXImageTransform.Microsoft.gradient(startColorstr=#3A79B8,endColorstr=#2E629D)";
	}

	.qtip-tipped .qtip-icon{
		border: 2px solxyz #285589;
		background: #285589;
	}

		.qtip-tipped .qtip-icon .ui-icon{
			background-color: #FBFBFB;
			color: #555;
		}


/**
 * Twitter Bootstrap style.
 *
 * Tested with IE 8, IE 9, Chrome 18, Firefox 9, Opera 11.
 * Does not work with IE 7.
 */
.qtip-bootstrap{
	/** Taken from Bootstrap body */
	font-size: 14px;
	line-height: 20px;
	color: #333333;

	/** Taken from Bootstrap .popover */
	padding: 1px;
	background-color: #ffffff;
	border: 1px solxyz #ccc;
	border: 1px solxyz rgba(0, 0, 0, 0.2);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding;
	background-clip: padding-box;
}

	.qtip-bootstrap .qtip-titlebar{
		/** Taken from Bootstrap .popover-title */
		padding: 8px 14px;
		margin: 0;
		font-size: 14px;
		font-weight: normal;
		line-height: 18px;
		background-color: #f7f7f7;
		border-bottom: 1px solxyz #ebebeb;
		-webkit-border-radius: 5px 5px 0 0;
		-moz-border-radius: 5px 5px 0 0;
		border-radius: 5px 5px 0 0;
	}

		.qtip-bootstrap .qtip-titlebar .qtip-close{
			/**
			 * Overrxyzes qTip2:
			 * .qtip-titlebar .qtip-close{
			 *   [...]
			 *   right: 4px;
			 *   top: 50%;
			 *   [...]
			 *   border-style: solxyz;
			 * }
			 */
			right: 11px;
			top: 45%;
			border-style: id;
		}

	.qtip-bootstrap .qtip-content{
		/** Taken from Bootstrap .popover-content */
		padding: 9px 14px;
	}

	.qtip-bootstrap .qtip-icon{
		/**
		 * Overrxyzes qTip2:
		 * .qtip-default .qtip-icon {
		 *   border-color: #CCC;
		 *   background: #F1F1F1;
		 *   color: #777;
		 * }
		 */
		background: transparent;
	}

		.qtip-bootstrap .qtip-icon .ui-icon{
			/**
			 * Overrxyzes qTip2:
			 * .qtip-icon .ui-icon{
			 *   wxyzth: 18px;
			 *   height: 14px;
			 * }
			 */
			wxyzth: auto;
			height: auto;

			/* Taken from Bootstrap .close */
			float: right;
			font-size: 20px;
			font-weight: bold;
			line-height: 18px;
			color: #000000;
			text-shadow: 0 1px 0 #ffffff;
			opacity: 0.2;
			filter: alpha(opacity=20);
		}

		.qtip-bootstrap .qtip-icon .ui-icon:hover{
			/* Taken from Bootstrap .close:hover */
			color: #000000;
			text-decoration: id;
			cursor: pointer;
			opacity: 0.4;
			filter: alpha(opacity=40);
		}


/* IE9 fix - removes all filters */
.qtip:not(.ie9haxors) div.qtip-content,
.qtip:not(.ie9haxors) div.qtip-titlebar{
	filter: id;
	-ms-filter: id;
}


.qtip .qtip-tip{
	margin: 0 auto;
	overflow: hxyzden;
	z-index: 10;

}

	/* Opera bug #357 - Incorrect tip position
	https://github.com/Craga89/qTip2/issues/367 */
	x:-o-prefocus, .qtip .qtip-tip{
		visibility: hxyzden;
	}

	.qtip .qtip-tip,
	.qtip .qtip-tip .qtip-vml,
	.qtip .qtip-tip canvas{
		position: absolute;

		color: #123456;
		background: transparent;
		border: 0 dashed transparent;
	}

	.qtip .qtip-tip canvas{ top: 0; left: 0; }

	.qtip .qtip-tip .qtip-vml{
		behavior: url(#default#VML);
		display: inline-block;
		visibility: visible;
	}


#qtip-overlay{
	position: fixed;
	left: 0; top: 0;
	wxyzth: 100%; height: 100%;
}

	/* Applied to modals with show.modal.blur set to true */
	#qtip-overlay.blurs{ cursor: pointer; }

	/* Change opacity of overlay here */
	#qtip-overlay div{
		position: absolute;
		left: 0; top: 0;
		wxyzth: 100%; height: 100%;

		background-color: black;

		opacity: 0.7;
		filter:alpha(opacity=70);
		-ms-filter:"progxyz:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	}


.qtipmodal-ie6fix{
	position: absolute !important;
}

</style>
<script src="jquery-3.2.0.js"></script>
<script src="jquery.qtip.js"></script>
<script type="text/javascript">

	var country = [];
     	var gdp = [];
     	var population = [];
     	
		$.get('data.php' ,function(data){
  		for (var i = 0; i < data.length; i++) {
  			country.push(data[i].Country);
  			gdp.push(data[i].GDP);
  			population.push(data[i].Population);
  		}

  		country = $.map(country, function(el) { return el });
  		gdp = $.map(gdp, function(el) { return el });
  		population = $.map(population, function(el) { return el });

  	});


$(document).ready(function(){

     $('area').each(function() {
		
                var id = this.id;
		var c = "vishal";
		
var txt = "GDP: " + gdp[id] + " Population: " + population[id];
        $(this).qtip({
		   content: {
		       text: id,
		       title: id
		   },
		   position: {
		      target: 'mouse',
		      adjust: {x: 5, y: 5},
		   }
		});
             });

     });

</script>
</head>
<body>
	<div style="width:100%" align="center">
<img src="world.jpg" usemap="#worldmap">
<map xyz="worldmap" name="worldmap">
	<area shape="poly" id="0" coords="969,607,973,610,975,610,975,603"  title="Luxembourg" />
	<area shape="poly" id="1" coords="997,628,1001,633,993,637,980,637,975,635,986,628" xyz = ('Switzerland')" href="switzerland/" title="Switzerland" />
	<area shape="circle" id="2" coords="895,356,10" title="Jan Mayen (Norway)" />
	<area shape="poly" id="2" xyz = ('Norway')" coords="1008,518,999,518,986,530,975,530,971,522,969,518,969,486,982,472,1006,449,1021,417,1030,405,1030,403,1023,405,1017,409,1014,413,1012,413,1012,407,1021,400,1021,396,1030,388,1036,386,1043,382,1045,375,1053,371,1064,371,1064,367,1071,361,1084,356,1099,359,1112,369,1114,369,1114,375,1110,377,1105,377,1108,380,1112,382,1112,384,1108,384,1108,386,1105,386,1105,382,1101,382,1099,380,1099,377,1095,377,1095,380,1088,380,1088,382,1086,384,1086,394,1082,396,1069,396,1062,388,1060,388,1056,390,1053,400,1045,400,1043,405,1036,407,1032,417,1032,426,1023,436,1021,461,1012,463,1010,469,1010,490,1012,490,1012,497,1012,509" href="	y/" title="	y" />
	<area shape="poly" id="7" coords="256,620,256,628,258,633,256,666,261,693,274,716,280,727,291,731,300,735,323,739,330,746,343,746,349,741,354,741,373,758,380,756,384,756,399,777,408,777,406,764,414,758,427,754,451,754,453,750,469,752,475,754,482,754,484,756,488,769,492,777,499,787,503,777,503,766,497,750,497,739,514,727,525,712,527,702,536,687,536,683,547,681,553,676,560,674,560,670,555,670,555,662,566,653,577,649,570,639,568,630,560,630,551,645,529,645,518,658,508,658,505,662,508,662,510,662,505,666,492,666,488,672,488,666,495,658,495,641,477,635,469,622,469,618,458,618,451,622,436,622,432,618,412,614,412,616,267,616,263,620" href="usa/" xyz = "" title="USA" />
<area shape="poly" id="4" xyz = ('Ireland')" coords="904,557,897,557,893,559,893,566,887,566,884,572,884,578,887,580,887,584,884,584,884,591,887,593,895,593,902,589,906,589,908,584,910,578,910,570,904,570,900,568,900,561,904,559" href="ireland/" title="Ireland" />

<area shape="circle" id="5" coords="1227,781,4" href="qatar/" xyz = ('Qatar')" title="Qatar" />
<area shape="poly" id="6" xyz = ('5')" coords="806,442,819,444,817,449,809,449,809,453,817,453,819,463,817,461,815,461,815,465,824,465,837,472,845,465,858,459,869,451,869,444,863,438,861,430,852,430,848,434,835,434,828,436,826,436,817,430,815,430,811,434" href="5/" title="5" />

<area shape="poly" id="7" coords="165,384,152,377,128,377,124,371,107,371,100,361,98,365,92,365,92,359,81,356,74,359,61,367,48,377,40,392,37,394,27,396,24,407,37,415,40,421,33,430,16,442,16,453,22,455,27,459,46,459,53,459,53,467,40,472,31,482,11,472,5,467,-1,467,-1,474,11,476,14,474,31,484,27,492,31,501,29,507,20,507,20,515,27,515,33,507,37,515,48,515,50,526,68,528,74,528,68,538,59,549,29,568,11,578,-1,584,-1,589,7,584,29,574,44,568,46,570,48,566,55,564,68,566,61,557,70,555,85,536,92,532,92,551,100,551,109,528,107,524,118,515,131,513,139,507,146,509,161,513,172,518,185,528,198,551,209,566,217,570,228,561,226,549,215,538,204,520,196,511,191,513,185,520,176,507,165,507" href="usa/" title="Alaska Map(USA)" xyz = "United States" id = "United States" />
<area shape="poly" id="8" coords="986,564,999,564,1004,566,1010,564,1012,555,1012,549,1010,549,1004,551,1001,545,1004,543,1008,545,1008,543,1004,534,1001,532,997,534,991,543,986,543" href="denmark/" title="Denmark" />

<area shape="poly" id="8" coords="670,49,683,39,705,30,733,18,748,14,772,16,793,26,800,41,806,51,813,51,822,60,837,80,845,89,858,89,874,103,865,116,856,131,852,139,845,156,841,166,835,166,835,177,845,181,839,202,839,214,845,216,841,233,839,264,848,285,832,306,830,319,822,329,824,371,809,390,791,403,770,407,765,411,754,430,741,442,728,442,720,461,711,486,705,511,696,511,689,505,687,503,679,503,668,490,655,459,646,436,646,409,653,396,657,394,659,390,659,384,651,390,644,390,640,386,635,350,629,315,622,292,618,279,616,271,605,262,592,262,575,267,564,264,553,256,553,250,549,244,542,252,540,250,547,241,547,237,542,231,540,210,538,202,557,191,564,183,575,183,581,175,583,164,583,156,581,156,581,158,570,158,566,149,568,139,590,116,599,112,601,112,601,101,599,95,609,85,635,72,661,53" href="greenland/" title="Greenland" xyz = ('Denmark')" />
<area shape="poly" id="10" xyz = ('Sweden')" coords="1056,390,1062,398,1073,407,1075,440,1066,442,1062,451,1062,461,1043,478,1040,495,1040,503,1045,505,1047,513,1053,513,1053,518,1045,518,1036,526,1036,534,1043,534,1043,532,1045,530,1051,530,1049,536,1047,543,1043,543,1043,536,1038,536,1038,547,1034,551,1025,551,1023,557,1023,559,1014,559,1012,555,1012,549,1012,543,1010,543,1008,536,1008,528,1006,528,1004,524,1008,518,1012,509,1012,490,1010,490,1010,469,1012,463,1021,461,1023,436,1032,426,1032,417,1036,407,1043,405,1045,400,1053,400" href="sweden/" title="Sweden" />
<area shape="rect" xyz = ('Australia')" id="11" coords="1155,1189,1242,1206" href="austria/" title="Australia Map" />
<area shape="poly" id="11" coords="1617,1017,1614,1019,1614,1022,1614,1026,1608,1034,1601,1036,1597,1036,1593,1038,1593,1040,1588,1040,1588,1038,1584,1038,1580,1040,1573,1047,1569,1049,1567,1059,1565,1063,1565,1070,1567,1076,1573,1091,1575,1103,1578,1107,1580,1111,1575,1118,1575,1128,1580,1130,1582,1132,1597,1132,1601,1126,1625,1126,1632,1114,1647,1114,1649,1109,1666,1109,1677,1114,1684,1122,1686,1132,1692,1132,1697,1122,1701,1120,1699,1126,1697,1132,1695,1137,1695,1139,1703,1137,1710,1137,1712,1149,1721,1155,1729,1158,1729,1158,1731,1158,1734,1166,1738,1172,1742,1187,1744,1193,1755,1193,1760,1191,1762,1172,1762,1166,1760,1162,1755,1162,1753,1162,1749,1158,1757,1151,1764,1149,1768,1149,1770,1141,1777,1122,1783,1111,1786,1107,1788,1091,1790,1078,1788,1063,1781,1059,1775,1053,1770,1045,1762,1038,1751,1030,1749,1028,1749,1022,1744,1015,1744,1009,1738,1001,1736,996,1734,990,1731,984,1729,982,1725,982,1723,990,1721,994,1718,1017,1718,1019,1714,1022,1712,1022,1712,1015,1708,1015,1708,1017,1703,1017,1701,1015,1697,1009,1690,1009,1690,1005,1695,1001,1695,994,1695,990,1690,990,1682,990,1677,986,1673,986,1671,990,1666,990,1660,996,1658,999,1656,1001,1656,1005,1649,1005,1647,1001,1643,999,1636,1001,1630,1009,1627,1011,1625,1015,1619,1015" href="australia/" title="Map of Australia" xyz = ('Australia')" />
<area shape="rect" id="12" coords="1008,651,1017,660" href="san-marino/" title="San Marino Map" />
<area shape="poly" id="13" coords="973,599,960,589,971,574,986,566,982,578,975,599" href="netherlands/" title="Netherlands" />
<area shape="poly" id="14" coords="1038,620,1032,633,1021,635,1019,635,1006,633,1001,628,1010,628,1019,618,1021,618,1027,616,1038,618" href="austria/" title="Austria" />
<area shape="poly" id="15" coords="1099,392,1099,405,1108,413,1101,419,1108,438,1105,442,1108,457,1110,463,1108,463,1116,474,1108,488,1097,503,1095,507,1086,507,1077,511,1071,509,1060,503,1060,482,1062,472,1066,472,1075,457,1079,451,1082,446,1082,442,1075,440,1073,407,1062,398,1056,390,1060,388,1062,388,1069,396,1082,396,1086,394,1086,384,1088,382,1088,380,1095,380,1095,377,1099,377,1101,382,1105,382,1103,386,1103,390" href="finland/" title="Finland" />
<area shape="poly" id="17" coords="1023,572,1014,564,1008,570,1004,566,999,564,986,564,984,574,975,595,975,610,986,616,986,628,1010,628,1019,618,1006,603,1027,595,1023,587" href="germany/" xyz = ('Germany')" title="Germany" />
<area shape="poly" xyz="Canada" id="18" coords="165,507,165,384,176,386,185,394,191,394,196,384,204,384,226,375,235,369,250,344,254,298,265,258,284,233,306,223,308,212,321,202,334,198,360,177,393,156,419,124,421,112,436,93,462,74,464,66,479,62,486,51,497,45,527,39,551,39,573,45,590,49,594,57,594,64,605,64,607,72,603,83,590,99,588,99,581,99,588,103,586,108,577,122,566,135,560,145,551,160,549,168,538,168,538,172,529,177,534,185,536,198,531,200,525,216,514,223,514,233,514,252,508,269,503,277,505,285,505,298,518,319,529,336,538,348,547,348,551,352,557,365,566,367,575,380,577,390,570,396,579,407,586,407,596,419,605,426,607,432,605,434,594,453,592,467,590,482,590,505,599,530,607,545,612,555,629,564,631,572,635,574,638,599,640,607,648,610,655,626,653,635,642,633,633,635,612,643,592,651,583,662,579,660,579,651,575,647,570,641,568,630,560,630,551,645,529,645,523,651,518,658,508,658,505,662,510,662,508,666,492,666,488,672,488,666,495,658,495,645,495,641,477,635,469,622,469,618,458,618,451,622,438,622,434,618,423,616,412,614,412,616,267,616,265,618,263,620,256,620,235,603,241,599,228,582,219,572,217,572,222,584,222,591,219,591,209,574,209,570,217,570,228,564,226,549,215,538,204,520,196,511,191,513,185,520,176,507" href="#" title="Canada Map"/>
<area shape="poly" xyz = ('Belgium')" id="19" coords="960,589,956,595,969,607,975,603,975,599,973,599" href="belgium/"  title="Belgium" />
<area shape="poly" id="20" coords="908,605,917,595,915,591,913,591,913,587,917,584,915,582,915,578,917,574,919,576,923,576,921,570,921,564,919,564,919,570,915,570,910,570,904,570,902,568,900,568,900,561,904,559,906,555,906,549,900,545,897,536,893,532,897,526,908,524,917,522,923,515,928,505,902,495,902,488,897,488,895,484,902,482,908,482,908,486,906,492,906,495,930,505,932,505,932,495,939,499,939,505,936,511,934,515,932,515,930,515,930,522,926,524,923,530,921,532,934,532,932,538,928,549,932,555,941,568,949,580,952,587,947,591,949,593,949,599,945,601,934,603,923,605,917,605,915,607,910,607" href="united-kingdom/" xyz = ('United Kingdom')" title="Map of United Kingdom" />
<area shape="poly" id="21" coords="956,595,949,599,947,607,941,612,930,610,926,616,917,618,917,628,932,630,934,662,941,664,960,668,960,662,973,662,984,658,980,647,980,637,975,635,986,628,986,616,975,610,969,607" href="france/" xyz = ('France')" title="Map of France" />
<area shape="poly" id="22" coords="1892,1128,1898,1141,1900,1147,1900,1155,1898,1158,1890,1168,1881,1185,1857,1206,1857,1212,1864,1222,1874,1220,1890,1201,1907,1174,1911,1176,1918,1162,1924,1162,1926,1149,1922,1147,1913,1147,1911,1141,1905,1137,1900,1130,1896,1128" href="newzealand/" xyz = ('New Zealand')" title="Newzealand" />
<area shape="poly" id="23" coords="1246,779,1242,787,1229,787,1227,785,1225,785,1229,794,1248,796,1255,785,1255,779" href="united-arab-emirates/" xyz = ('United Arab Emirates')" title="United Arabiab Emirates" />
<area shape="poly" id="24" coords="1716,641,1725,641,1744,660,1740,664,1736,664,1731,670,1723,670,1725,685,1725,695,1721,704,1718,718,1708,725,1695,725,1690,733,1684,731,1677,731,1677,735,1669,735,1664,752,1658,752,1658,746,1656,739,1647,735,1671,718,1673,706,1677,706,1679,712,1690,710,1695,702,1705,695,1710,681,1705,664,1714,660,1721,653,1721,647,1714,645" xyz = ('Japan')" href="japan/" title="Japan" />
<area shape="poly" id="25" coords="1142,729,1136,737,1134,743,1136,754,1138,754,1138,737,1142,731,1142,731,1140,729" href="israel/" xyz = ('Israel')" title="Israel" />
<area shape="poly" id="26" coords="984,658,993,653,1017,681,1027,685,1032,693,1030,695,1010,695,1012,702,1021,706,1021,712,1030,718,1027,697,1032,697,1040,693,1036,685,1045,687,1045,681,1030,670,1019,658,1012,649,1014,643,1021,641,1019,635,1008,633,1001,633,993,637,980,637,980,649" href="italy/" xyz = ('Italy')" title="Map of Italy" />
<area shape="rect" id="27" coords="583,764,698,785" href="usa/puerto-rico/" title="Puerto Rico" xyz = ('Puerto Rico')" />
<area shape="poly" id="28" coords="1664,664,1658,672,1658,681,1647,685,1649,695,1638,699,1632,702,1630,693,1632,687,1625,685,1632,679,1636,674" href="north-korea/" title="North Korea" xyz = ('Korea')" />
<area shape="poly" id="28" coords="1649,695,1658,704,1656,718,1638,727,1636,718,1638,699" href="south-korea/" title="Korea" xyz = ('Korea')" />
<area shape="poly" id="29" xyz = ('Spain')" coords="893,658,934,658,934,662,960,668,958,672,945,683,941,689,943,691,967,681,967,687,941,697,934,708,915,710,910,712,902,699,904,676,908,672,893,672,891,658" href="spain/" title="Spain" />
<area shape="poly" id="30" xyz = ('Kuwait')" coords="1201,756,1209,756,1209,750,1207,750,1199,756,1203,756" href="kuwait/" title="Kuwait" />
<area shape="circle" xyz = ('Brunei Darussalam')" id="31" coords="1575,898,4" href="brunei/" title="Brunei" />
<area shape="poly" xyz = ('The Bahamas')" id="32" coords="508,771,521,771,538,789,555,802,553,806,538,808,534,798,518,789,512,789" href="bahamas/" title="Bahamas" />
<area shape="rect" id="35" coords="1157,1304,1246,1323" href="cyprus/" title="Cyprus Map" />
<area shape="poly" id="36" coords="1610,779,1604,792,1606,800,1614,796,1614,779" href="taiwan/" title="Taiwan" xyz = ('China')" />
	<area shape="rect" id="37" coords="984,1268,1075,1281" href="slovenia/" title="Slovenia Map" xyz = ('Slovenia')" />
<area shape="poly" id="38" coords="1136,754,1136,764,1144,781,1160,800,1160,808,1181,835,1186,823,1201,838,1209,821,1233,819,1244,812,1248,806,1248,796,1229,794,1218,771,1209,756,1188,756,1160,737,1149,739,1155,752,1138,754" xyz = ('Saudi Arabia')" href="saudi-arabia/" title="Saudi Arabia" />
<area shape="poly" id="39" coords="893,672,893,704,904,704,902,697,904,676,906,672" href="portugal/" xyz = ('Portugal')" title="Portugal" />
<area shape="rect" id="40" coords="984,1344,1131,1358" href="czech-republic/" xyz = ('Czech Republic')" title="Czech Republic Map" />
<area shape="poly" id="41" coords="1051,687,1064,710,1084,722,1099,716,1103,706,1092,699,1088,685,1088,681,1092,672,1071,672,1058,681,1058,685,1053,687" href="greece/" title="Greece" xyz = ('Greece')" />
<area shape="poly" id="42" coords="1097,511,1077,513,1064,520,1064,530,1073,526,1077,528,1086,532,1095,532,1095,518" href="estonia/" xyz = ('Estonia')" title="Estonia" />
<area shape="rect" id="43" coords="609,785,735,802" href="st-kitts-and-nevis/" title="Saint Kitts and Nevis" xyz = ('St. Kitts and Nevis')" />
<area shape="rect" id="44" coords="622,865,757,884" href="trinxyzad-and-tobago/" title="Trinxyzad And Tobago" xyz = ('Trinxyzad and Tobago')" />
<area shape="poly" id="45" coords="1040,620,1040,626,1066,620,1069,616,1060,612,1047,612,1047,612" xyz = ('Slovak Republic')" href="slovakia/" title="Slovakia" />
<area shape="rect" id="46" coords="1675,889,1725,908" href="palau/" title="Map of Palau" xyz = ('Palau')" />
<area shape="rect" id="47" coords="629,850,700,865" href="barbados/" title="Barbados" xyz = ('Barbados')" />
<area shape="poly" id="50" coords="1367,877,1361,863,1357,854,1350,842,1346,823,1344,815,1344,806,1339,808,1331,808,1324,802,1320,796,1318,792,1324,787,1335,785,1326,766,1341,762,1359,733,1350,729,1350,712,1346,708,1354,706,1354,702,1370,712,1376,710,1385,712,1383,720,1378,727,1383,731,1376,733,1378,739,1387,748,1387,758,1417,773,1430,779,1428,762,1432,764,1435,771,1450,771,1448,764,1454,762,1456,758,1469,756,1476,764,1474,769,1469,769,1463,779,1463,787,1458,792,1454,798,1454,789,1448,792,1454,785,1452,781,1441,781,1441,777,1430,773,1430,787,1435,802,1422,810,1409,823,1391,838,1387,842,1387,858,1383,869,1376,879,1367,879" href="india/" xyz = ('India')" title="India" />
<area shape="poly" id="51" coords="1320,239,1322,244,1322,256,1305,264,1279,283,1264,300,1251,327,1248,344,1257,367,1272,373,1281,382,1294,382,1320,405,1322,394,1318,392,1309,382,1307,356,1318,348,1320,327,1331,317,1335,317,1344,329,1357,327,1376,333,1391,344,1387,333,1385,315,1398,313,1422,310,1415,300,1415,290,1424,281,1435,271,1448,269,1456,262,1463,258,1458,250,1467,237,1474,235,1480,250,1484,254,1497,254,1497,237,1504,227,1513,223,1506,210,1495,214,1489,218,1489,206,1493,200,1489,195,1480,198,1476,191,1465,191,1463,185,1458,175,1454,172,1448,170,1443,170,1443,154,1445,141,1452,131,1454,122,1439,122,1435,118,1441,114,1448,116,1448,120,1456,120,1463,120,1463,114,1469,114,1482,135,1478,143,1478,152,1495,160,1493,172,1493,175,1493,191,1491,195,1495,193,1497,179,1502,175,1508,175,1521,193,1523,204,1530,206,1536,212,1534,214,1530,214,1526,210,1523,206,1517,210,1513,212,1508,212,1515,223,1519,223,1536,233,1530,235,1536,241,1532,250,1536,244,1554,248,1562,250,1567,254,1571,269,1569,279,1558,294,1567,296,1569,313,1584,313,1597,315,1599,323,1621,323,1621,313,1630,310,1638,317,1647,317,1656,323,1656,325,1656,356,1664,365,1669,359,1669,348,1671,344,1673,344,1677,348,1677,352,1684,352,1688,348,1692,348,1699,354,1701,350,1705,350,1712,350,1710,344,1708,336,1710,333,1716,327,1718,321,1710,319,1714,315,1714,300,1708,296,1697,285,1692,281,1686,281,1688,269,1703,260,1710,260,1716,273,1721,260,1740,273,1760,277,1775,283,1773,292,1768,294,1760,294,1751,283,1747,275,1742,275,1740,283,1731,292,1714,292,1712,292,1710,296,1718,300,1729,313,1734,317,1734,323,1731,325,1723,325,1721,325,1721,329,1736,329,1753,338,1766,338,1768,346,1770,352,1781,352,1781,365,1801,359,1814,359,1825,373,1827,382,1840,382,1868,382,1874,392,1877,394,1881,396,1883,388,1877,382,1883,375,1896,377,1900,380,1907,380,1922,384,1924,356,1935,350,1946,350,1950,359,1942,365,1931,365,1926,367,1924,367,1924,384,1926,386,1946,403,1961,413,1970,421,1978,421,1993,436,1985,444,1978,446,1978,461,1965,459,1957,453,1955,444,1946,446,1937,442,1933,453,1922,455,1929,469,1931,484,1924,484,1918,476,1896,497,1881,513,1877,511,1874,505,1864,507,1859,511,1842,513,1835,530,1842,530,1842,551,1835,553,1835,564,1833,566,1827,566,1825,578,1816,580,1814,591,1805,599,1792,620,1775,637,1753,649,1753,653,1751,660,1747,664,1744,660,1738,651,1760,641,1786,618,1799,595,1801,593,1801,580,1799,578,1799,543,1805,532,1825,513,1835,501,1842,499,1844,486,1840,492,1835,492,1827,505,1822,505,1820,495,1822,492,1822,490,1807,490,1792,513,1796,513,1796,520,1783,522,1773,522,1773,513,1764,513,1764,518,1747,518,1727,518,1716,532,1701,549,1688,559,1701,557,1703,559,1703,570,1705,566,1712,566,1721,574,1725,574,1725,564,1731,568,1731,589,1738,612,1731,614,1731,628,1734,637,1727,635,1727,639,1721,639,1721,635,1721,605,1723,589,1718,593,1716,614,1710,628,1699,643,1686,660,1677,666,1671,666,1664,664,1666,645,1677,645,1686,618,1666,626,1656,610,1645,612,1632,576,1621,574,1604,578,1606,587,1597,610,1584,607,1571,603,1560,612,1543,612,1530,603,1510,603,1504,591,1484,587,1480,591,1480,610,1469,610,1456,599,1448,599,1435,607,1426,614,1422,614,1413,610,1402,599,1396,599,1380,589,1363,566,1350,574,1346,570,1344,572,1335,564,1333,559,1322,559,1316,564,1298,566,1292,570,1281,570,1277,587,1279,593,1281,599,1261,593,1257,599,1251,601,1233,591,1227,591,1216,599,1209,603,1207,612,1203,618,1216,633,1209,643,1203,647,1205,653,1212,672,1199,674,1196,670,1186,662,1166,662,1153,649,1147,649,1147,643,1153,633,1162,620,1160,610,1162,610,1131,599,1131,587,1118,587,1121,570,1099,551,1095,532,1097,511,1110,511,1097,503,1116,474,1108,463,1110,463,1105,449,1105,442,1108,436,1101,419,1108,413,1099,405,1099,392,1103,390,1108,386,1112,382,1116,384,1121,380,1136,388,1149,396,1164,407,1170,417,1168,430,1162,436,1149,436,1140,434,1129,428,1127,428,1136,436,1136,451,1136,455,1147,459,1149,463,1151,463,1149,457,1144,455,1142,446,1151,446,1157,453,1164,453,1162,440,1173,432,1181,430,1183,434,1183,421,1183,413,1181,396,1194,400,1201,405,1201,411,1190,415,1196,426,1203,421,1205,411,1222,400,1212,398,1207,396,1207,386,1207,384,1216,384,1218,388,1216,394,1216,398,1222,398,1229,398,1231,394,1238,392,1253,392,1266,394,1264,386,1270,390,1268,396,1274,396,1274,390,1270,384,1264,380,1264,371,1257,369,1255,371,1248,369,1238,369,1225,352,1225,342,1231,327,1238,310,1246,298,1246,281,1257,275,1277,258,1290,256,1303,252,1307,241,1313,239" href="russia/" xyz = ('Russia')" title="Map of Russia (Russian Federation)" />

	<area shape="poly" id="48" coords="629,1097,646,1111,651,1120,648,1130,642,1132,633,1132,627,1130,625,1126,625,1114" href="uruguay/" xyz = ('Uruguay')" title="Uruguay" />


<area shape="poly" id="China Map" coords="1604,578,1621,574,1632,576,1645,612,1656,610,1666,626,1686,618,1677,645,1666,645,1664,664,1636,674,1610,695,1608,689,1614,679,1610,679,1599,689,1593,691,1601,702,1606,699,1617,699,1619,706,1608,708,1601,720,1614,735,1619,750,1610,766,1601,781,1575,802,1558,806,1554,806,1556,812,1549,823,1541,823,1536,817,1545,812,1545,804,1536,802,1526,794,1510,796,1506,798,1506,800,1495,804,1484,787,1480,789,1480,781,1487,769,1482,760,1476,764,1469,756,1456,758,1454,762,1450,764,1448,762,1437,762,1432,764,1428,762,1426,764,1396,750,1387,748,1378,739,1376,733,1383,731,1378,727,1385,712,1376,710,1370,712,1354,702,1354,693,1350,689,1352,681,1365,681,1387,668,1387,664,1389,653,1385,645,1396,645,1400,628,1413,630,1415,630,1415,620,1422,614,1426,614,1432,624,1441,624,1443,645,1461,649,1469,651,1474,666,1506,666,1519,672,1530,668,1543,668,1560,653,1558,645,1569,647,1588,633,1604,633,1597,622,1588,624,1580,624,1586,607,1597,610,1606,587" href="china/" xyz = ('China')" title="Map of China" />
<area shape="poly" id="Russia Map" coords="1183,135,1196,122,1220,124,1220,118,1227,120,1222,126,1227,135,1227,141,1229,145,1235,145,1235,137,1238,120,1238,112,1248,112,1257,101,1259,93,1259,91,1268,91,1268,97,1283,97,1283,95,1294,95,1294,101,1287,101,1285,101,1285,103,1281,103,1281,99,1268,99,1266,108,1277,112,1277,120,1283,120,1290,110,1294,108,1300,108,1300,120,1305,122,1303,124,1296,124,1292,135,1287,131,1285,133,1281,139,1281,143,1274,145,1272,147,1272,162,1261,162,1259,154,1251,154,1246,149,1240,149,1240,152,1229,152,1227,154,1225,162,1220,162,1205,158,1199,152,1196,143,1190,143,1186,141,1181,135" href="russia/" xyz = ('Russia')" xyz = ('Russia')" title="Map of Russia" />
<area shape="rect" id="France" coords="988,662,997,674" href="france/" xyz = ('France')" xyz = ('France')" title="France" />
<area shape="circle" id="New Caledonia (France)" coords="1866,1074,41" href="france/" title="New Caledonia (France)" xyz = ('France')" />
<area shape="poly" id="Italy" coords="986,676,999,676,999,693,988,693" href="italy/" title="Italy" />
<area shape="poly" id="Switzerland" coords="991,626,986,626,984,628,980,628,980,633,975,635,980,635,980,637,984,637,999,637,999,635,1001,635,1001,633,997,633,999,633,999,628,999,630,997,630,997,628,993,628,993,626" href="switzerland/" title="Switzerland" />
<area shape="poly" id="Mexico" coords="300,735,302,748,315,760,308,764,315,773,321,773,326,783,323,783,323,787,328,787,339,798,343,794,334,783,319,758,313,750,310,741,317,743,326,758,339,771,343,781,358,794,362,798,362,812,373,821,393,829,408,840,425,835,434,842,440,835,443,825,458,819,466,810,466,804,447,804,443,815,434,819,419,819,408,806,406,794,408,777,399,777,384,756,373,758,354,741,349,741,345,746,330,746,323,739" href="mexico/" title="Mexico" />

<area shape="rect" id="Belize" coords="451,823,460,838" href="belize/" title="Belize" />
<area shape="poly" id="Guatemala" coords="449,825,443,825,443,835,434,838,434,846,445,848,451,842,451,838,451,825,443,825,451,825" href="guatemala/" title="Guatemala" />
<area shape="poly" id="El Salvador" coords="443,848,453,854,462,852,462,850,451,842" href="el-salvador/" title="El Salvador" />
<area shape="poly" id="Honduras" coords="460,848,482,848,479,835,460,838,451,838,451,842" href="honduras/" title="Honduras" />
<area shape="poly" id="Nicaragua" coords="460,852,469,863,484,863,484,850,482,848,460,848,462,852" href="nicaragua/" title="Nicaragua" />
<area shape="rect" id="Jamaica Map" coords="512,819,532,831" href="jamaica/" title="Jamaica Map" />
<area shape="poly" id="Costa Rica" coords="469,863,473,875,486,875,486,869,484,863" href="costa-rica/" title="Costa Rica" />
<area shape="poly" id="Panama" coords="482,875,490,884,508,875,510,881,514,881,518,877,512,871,501,871,490,871,490,869,486,869,486,875" href="panama/" title="Panama" />
<area shape="circle" id="Bermuda (UK)" coords="573,718,15" href="united-kingdom/bermuda/" title="Bermuda (UK)" />
<area shape="poly" id="Cuba" coords="477,800,488,792,505,796,538,810,518,817,508,804,492,800,477,806,475,802" href="cuba/" title="Cuba" />
<area shape="poly" id="Haiti" coords="549,812,538,812,527,821,549,821" href="haiti/" title="Haiti" />
<area shape="poly" id="Dominican Republic" coords="549,812,562,812,568,817,568,823,553,823,553,829,549,827,549,821" href="dominican-republic/" title="Dominican Republic" />
<area shape="poly" id="Hawaii (usa)" coords="59,804,79,810,87,829,94,829,92,812,76,802,59,798" href="usa/" title="Hawaii (usa)" />
<area shape="circle" id="Kiribati" coords="50,911,17" href="kiribati/" title="Kiribati" />
<area shape="circle" id="Tonga" coords="33,988,25" href="tonga/" title="Tonga" />
<area shape="circle" id="French Polynesia" coords="180,1015,60" href="france/french-polynesia/" title="French Polynesia" />
<area shape="poly" id="Venezuela" coords="594,865,592,865,588,867,581,867,579,865,570,865,568,863,568,861,555,861,547,861,542,865,540,871,544,877,547,886,560,886,560,888,562,890,573,890,570,896,573,911,575,919,586,919,590,915,590,907,590,902,605,902,609,898,609,894,607,890,609,888,612,886,612,881,614,879,614,877,612,873,607,871,603,869,599,865,596,865" href="venezuela/" title="Venezuela" />
<area shape="poly" id="Colombia" coords="553,861,553,854,549,854,542,858,538,861,529,865,527,871,523,873,518,877,516,894,516,902,510,911,508,913,510,917,516,921,527,923,540,934,549,938,557,938,557,942,557,944,560,944,560,942,560,925,557,925,557,923,562,921,562,915,573,913,570,896,573,890,562,890,560,886,547,886,544,877,540,871,542,865,547,861" href="colombia/" title="Colombia" />
<area shape="poly" id="Ecuador" coords="508,917,508,917,503,919,501,921,499,927,499,938,505,938,505,942,503,942,503,950,505,953,510,953,512,946,514,942,521,938,527,934,527,923,516,921,510,917,510,917" href="ecuador/" title="Ecuador" />
<area shape="circle" id="Galapagos (Ecuador)" coords="443,925,12" href="ecuador/" title="Galapagos (Ecuador)" />
<area shape="poly" id="Peru" coords="499,938,501,940,501,944,499,944,497,946,497,961,499,963,503,965,508,971,512,982,516,990,521,996,523,1005,540,1022,542,1022,547,1024,555,1030,555,1034,557,1034,557,1028,560,1028,562,1005,564,1005,564,990,557,986,555,984,555,978,544,978,538,969,538,965,542,957,549,950,557,950,560,950,560,944,557,944,557,938,549,938,540,934,531,927,527,923,527,934,514,942,510,953,505,953,503,950,503,942,505,942,505,938" href="peru/" title="Peru" />
<area shape="poly" id="Guyana" coords="614,877,622,877,622,881,622,886,627,886,629,890,629,896,627,898,625,898,625,904,629,907,631,911,631,913,627,913,627,917,620,917,620,919,618,919,616,917,614,913,612,907,614,907,614,900,612,900,612,898,609,898,609,894,607,890,612,886,612,881,614,879" href="guyana/" title="Guyana" />
<area shape="poly" id="Surinam" coords="629,890,644,890,644,913,642,913,642,911,638,911,638,915,627,915,627,913,631,913,631,911,629,907,625,904,625,898,627,898,629,894" href="suriname/" title="Surinam" />
<area shape="poly" id="French Guiana" coords="644,913,644,915,651,915,655,913,657,909,657,904,659,904,659,900,655,898,655,896,651,894,646,894,644,890,644,890,644,890" href="france/french-guiana/" title="French Guiana" />
<area shape="poly" id="Bolivia" coords="557,986,566,986,575,978,583,978,588,992,596,994,607,996,614,1003,614,1013,614,1015,622,1015,627,1024,627,1038,622,1038,620,1032,603,1034,601,1049,577,1049,573,1055,570,1053,568,1045,566,1034,564,1030,562,1026,560,1024,562,1005,564,1005,564,990" href="bolivia/" title="Bolivia" />
<area shape="poly" id="Chile" coords="560,1024,560,1028,557,1028,557,1034,555,1034,553,1065,549,1101,547,1122,538,1145,538,1158,534,1168,529,1201,525,1224,529,1262,540,1281,557,1293,575,1302,577,1302,581,1293,581,1289,566,1287,566,1268,570,1266,566,1262,557,1262,547,1262,544,1252,540,1247,540,1237,544,1229,549,1216,549,1174,551,1158,555,1137,557,1116,555,1114,557,1101,560,1091,566,1080,566,1063,573,1061,573,1055,570,1053,566,1034" href="chile/" title="Chile" />
<area shape="circle" id="Easter Island (Chile)" coords="326,1107,12" href="chile/" title="Easter Island (Chile)" />
<area shape="poly" id="Paraguay" coords="627,1038,627,1049,646,1059,646,1072,635,1082,625,1082,625,1065,609,1061,599,1051,601,1049,599,1049,599,1049,601,1049,599,1049,601,1049,603,1034,620,1032,622,1038" href="paraguay/" title="Paraguay" />
<area shape="poly" id="Argentina" coords="646,1080,633,1091,627,1103,625,1116,625,1126,633,1141,629,1153,612,1160,603,1160,603,1172,588,1174,588,1181,596,1181,596,1189,586,1195,586,1204,577,1208,575,1216,583,1218,583,1227,575,1235,575,1245,564,1252,568,1260,570,1264,570,1266,570,1268,570,1275,581,1283,594,1285,594,1289,581,1289,566,1287,566,1268,570,1266,566,1262,547,1262,544,1252,540,1247,540,1237,544,1229,549,1216,549,1178,551,1153,555,1139,557,1116,555,1111,560,1091,566,1080,566,1063,573,1061,573,1055,577,1049,599,1049,599,1051,609,1061,625,1065,625,1082,635,1082,646,1072,648,1072,648,1080" href="argentina/" title="Argentina" />

<area shape="poly" id="Brazil" coords="679,927,692,930,705,936,728,940,748,953,752,973,731,999,728,999,726,1026,713,1053,685,1063,676,1072,676,1088,666,1105,655,1114,653,1122,651,1120,646,1111,629,1097,633,1091,646,1080,648,1080,648,1072,646,1059,627,1049,627,1024,622,1015,614,1015,614,1003,607,996,588,992,583,978,575,978,566,986,557,986,555,984,555,978,544,978,538,969,538,963,542,957,549,950,560,950,560,944,560,925,557,925,557,923,562,921,562,915,570,915,573,915,573,915,575,919,586,919,590,915,590,902,605,902,609,898,612,898,612,900,614,900,614,907,612,907,616,917,618,919,620,919,620,917,627,917,627,915,638,915,638,911,642,911,644,913,644,915,648,915,651,915,655,913,657,909,657,904,659,904,659,900,661,900,666,911,668,913,670,919,666,921,668,925" href="brazil/" title="Brazil" />
<area shape="circle" id="Falkland Islands" coords="616,1260,10" href="united-kingdom/falkland-islands/" title="Falkland Islands" />
	
<area shape="circle" id="Faroe Islands" coords="902,482,12" xyz = ('Denmark')" href="denmark/faroe-islands.html" title="Faroe Islands" />

<area shape="poly" id="Latvia" coords="1095,532,1099,551,1079,549,1060,551,1060,536,1064,534,1071,534,1075,538,1077,538,1077,528,1086,532" href="latvia/" title="Latvia" />
<area shape="poly" id="Lithuania" coords="1060,551,1060,557,1069,559,1071,566,1073,572,1084,570,1099,557,1099,551,1079,549" href="lithuania/" title="Lithuania" />
<area shape="poly" id="Russia (Russian Federation)" coords="1053,566,1071,566,1069,559,1060,557,1053,564" href="russia/" title="Russia (Russian Federation)" />
<area shape="poly" id="Belarus" coords="1099,551,1121,570,1118,587,1103,593,1082,589,1075,589,1073,572,1084,570,1099,557" href="belarus/" title="Belarus" />
<area shape="poly" id="Poland" coords="1053,566,1043,561,1038,561,1023,572,1025,591,1034,603,1049,612,1053,612,1060,612,1069,616,1075,601,1075,589,1073,572,1069,566" href="poland/" title="Poland" />
<area shape="poly" id="Ukraine" coords="1118,587,1131,587,1131,599,1162,610,1162,620,1144,630,1138,639,1142,647,1131,651,1123,645,1125,637,1118,633,1110,641,1105,645,1105,637,1112,635,1110,626,1101,620,1092,620,1079,624,1073,622,1064,624,1069,616,1075,601,1075,589,1095,591,1103,593" href="ukraine/" title="Ukraine" />
<area shape="poly" id="Moldova" coords="1092,620,1099,643,1105,645,1105,637,1112,633,1110,624,1101,620,1090,620,1090,620" href="moldova/" title="Moldova" />
<area shape="poly" id="Czech Republic" coords="1047,610,1040,620,1027,616,1023,618,1019,618,1006,603,1027,595,1027,595,1036,603,1045,610" href="czech-republic/" title="Czech Republic" />

<area shape="poly" id="Liechtenstein" coords="1001,628,1006,633,1001,633,997,628" href="liechtenstein/" title="Liechtenstein" />
<area shape="poly" id="Slovenia" coords="1030,633,1027,643,1021,641,1021,635" href="slovenia/" xyz = ('Slovenia')" title="Slovenia" />
<area shape="poly" id="Croatia" coords="1019,641,1021,649,1040,668,1043,664,1032,649,1032,647,1036,645,1049,649,1049,643,1038,639,1032,633,1030,635,1027,643,1021,641" href="croatia/" title="Croatia" />
<area shape="poly" id="Bosnia Herzegovina" coords="1049,649,1049,664,1047,668,1043,664,1032,647,1036,645" href="bosnia/" title="Bosnia Herzegovina" />
<area shape="poly" id="Hungary" coords="1073,622,1066,626,1058,639,1043,641,1034,637,1032,633,1038,620,1040,620,1040,626,1066,620,1062,624" href="hungary/" title="Hungary" />
<area shape="poly" id="Romania" coords="1092,620,1079,624,1073,622,1064,628,1058,641,1069,651,1084,653,1101,653,1105,645,1099,641" href="romania/" title="Romania" />
<area shape="poly" id="Bulgaria" coords="1101,653,1101,672,1071,672,1069,664,1069,651,1084,653" href="bulgaria/" title="Bulgaria" />
<area shape="poly" id="Serbia" coords="1058,639,1045,641,1049,643,1049,666,1056,668,1066,666,1069,664,1069,651,1058,641,1056,639" href="serbia/" title="Serbia" />
<area shape="poly" id="Montenegro" coords="1040,668,1049,674,1051,666,1049,666,1047,668,1043,664" href="montenegro/" title="Montenegro" />
<area shape="poly" id="Albania" coords="1049,674,1051,687,1058,685,1058,676,1056,668,1051,666" href="albania/" title="Albania" />
<area shape="poly" id="Macedonia" coords="1058,683,1062,679,1073,672,1069,666,1062,666,1056,668,1058,681,1058,681,1060,681,1060,679" href="macedonia/" title="Macedonia" />
<area shape="circle" id="Cyprus" coords="1127,720,6" href="cyprus/" title="Republic of Cyprus" xyz = ('Cyprus')" />
<area shape="poly" id="Turkey" coords="1125,670,1140,670,1153,676,1170,674,1181,674,1190,687,1190,702,1179,704,1147,708,1144,712,1140,706,1136,706,1129,712,1125,712,1118,708,1114,710,1105,710,1101,710,1103,706,1092,699,1088,681,1092,672,1088,681,1103,681,1105,676,1116,674,1127,668" href="turkey/" title="Turkey" />
<area shape="poly" id="Georgia" coords="1166,662,1186,662,1196,670,1201,676,1192,676,1181,674,1170,674,1168,664" href="georgia/" title="Georgia" />
<area shape="poly" id="Armenia" coords="1190,687,1199,687,1194,676,1181,674" href="armenia/" title="Armenia" />
<area shape="poly" id="Syria" coords="1142,710,1142,731,1164,725,1173,712,1170,704,1149,708,1144,710" href="syria/" title="Syria" />
<area shape="poly" id="Iraq" coords="1190,702,1196,712,1196,729,1205,737,1207,750,1199,756,1188,756,1160,737,1160,729,1160,725,1166,725,1173,712,1170,706" href="iraq/" title="Iraq" />
<area shape="poly" id="Jordan" coords="1160,737,1149,739,1155,752,1138,754,1138,739,1142,731,1160,727" href="jordan/" title="Jordan" />
<area shape="poly" id="Azerbaijan" coords="1201,674,1212,672,1218,683,1212,695,1209,687,1199,691,1199,687,1194,676,1201,676,1199,674" href="azerbaijan/" title="Azerbaijan" />
<area shape="poly" id="Yemen" coords="1181,835,1177,840,1186,856,1201,852,1218,846,1238,831,1229,819,1209,821,1201,838,1186,823" href="yemen/" title="Yemen" />
<area shape="poly" id="Oman" coords="1248,796,1255,785,1274,796,1274,804,1270,808,1264,812,1264,819,1251,825,1238,831,1229,819,1233,819,1229,819,1233,819,1244,812,1248,806" href="oman/" title="Oman" />
<area shape="poly" id="Egypt" coords="1082,739,1095,741,1105,746,1108,741,1121,741,1134,743,1136,754,1136,764,1129,766,1138,779,1142,796,1136,796,1131,802,1082,800" href="egypt/" title="Egypt" />
<area shape="poly" id="Libya" coords="1082,739,1069,733,1058,733,1053,737,1053,748,1047,748,1030,741,1030,735,1008,733,1001,739,997,752,993,773,1008,792,1021,796,1030,792,1034,792,1073,812,1079,812,1082,798" href="libya/" title="Libya" />
<area shape="poly" id="Tunisia" coords="986,702,986,718,980,725,993,748,997,748,1001,737,1008,731,1006,714,1006,702" href="tunisia/" title="Tunisia" />
<area shape="poly" id="Algeria" coords="986,704,949,706,930,718,934,735,919,748,908,754,902,754,893,764,928,792,956,810,958,817,965,817,984,804,1008,792,993,773,997,750,993,750,980,727,986,720" href="algeria/" title="Algeria" />
<area shape="poly" id="Morocco" coords="893,764,871,764,884,756,889,752,887,746,897,727,908,716,928,716,930,718,934,735,919,748,908,754,902,754" href="morocco/" title="Morocco" />
<area shape="poly" id="Western Sahara" coords="871,764,863,777,854,789,850,796,850,804,871,804,869,794,878,792,878,779,895,779,895,766,893,764" href="western-sahara/" title="Western Sahara" />
<area shape="poly" id="Mauritania" coords="915,783,906,783,910,840,878,840,874,842,869,827,852,831,850,804,871,804,869,794,876,792,878,792,878,779,895,779,895,766,915,781" href="mauritania/" title="Mauritania" />
<area shape="poly" id="The Gambia" coords="850,848,861,848,865,850,865,852,850,852" href="the-gambia/" title="The Gambia" />
<area shape="poly" id="Senegal" coords="874,842,882,852,876,856,852,856,848,835,850,831,869,827" href="senegal/" title="Senegal" />
<area shape="poly" id="Guinea Bissau" coords="850,856,861,867,869,856" href="guinea-bissau/" title="Guinea Bissau" />
<area shape="poly" id="Guinea" coords="861,867,869,879,874,869,882,869,884,877,893,884,900,873,893,856,876,856,869,856" href="guinea/" title="Guinea" />
<area shape="poly" id="Sierra Leon" coords="878,886,884,877,882,869,874,869,869,881" href="sierra-leone/" title="Sierra Leon" />
<area shape="poly" id="Liberia" coords="893,884,902,894,902,904,889,902,878,886,884,877" href="liberia/" title="Liberia" />
<area shape="poly" id="Mali" coords="962,831,958,840,945,840,932,846,915,856,913,863,897,867,893,856,880,856,880,852,874,842,876,840,910,840,906,783,915,783,926,789,956,810,958,817,965,817,965,831" href="mali/" title="Mali" />
<area shape="poly" id="Burkina Faso" coords="939,842,954,856,947,861,928,871,913,863,917,854" href="burkina/" title="Burkina Faso" />
<area shape="poly" id="Cote D'ivorie" coords="928,871,923,896,902,904,902,894,893,884,900,873,897,867,913,863" href="cote-divoire/" title="Cote D'ivorie" />
<area shape="poly" id="Ghana" coords="943,863,945,894,934,898,923,896,928,871" href="ghana/" title="Ghana" />
<area shape="poly" id="Togo" coords="945,894,952,894,952,873,945,861,943,863" href="togo/" title="Togo" />
<area shape="poly" id="Benin" coords="954,856,960,856,962,869,956,875,956,888,952,894,952,873,945,861" href="benin/" title="Benin" />
<area shape="poly" id="Niger" coords="1027,792,1027,835,1014,850,984,850,973,848,965,848,960,856,954,856,939,842,947,840,958,840,965,831,965,817,1008,792,1021,796" href="niger/" title="Niger" />
<area shape="poly" id="Nigeria" coords="1014,850,1021,850,1023,861,1012,877,1008,888,993,888,986,904,971,904,967,890,954,890,956,888,956,875,962,869,960,856,965,848,978,848,982,850" href="nigeria/" title="Nigeria" />
<area shape="poly" id="Chad" coords="1075,812,1075,840,1062,846,1069,867,1030,886,1023,871,1030,871,1027,854,1021,850,1014,850,1027,835,1027,792,1034,792" href="chad/" title="Chad" />
<area shape="poly" id="Cameroon" coords="1030,886,1025,896,1025,911,997,911,986,904,993,888,1008,888,1023,861,1023,852,1027,854,1030,871,1023,871" href="cameroon/" title="Cameroon" />
<area shape="poly" id="Central African Republic" coords="1069,867,1071,867,1077,879,1095,898,1069,898,1066,902,1060,902,1053,896,1045,900,1043,907,1043,911,1027,911,1025,911,1025,896,1030,886" href="central-african-republic/" title="Central African Republic" />
<area shape="poly" id="Gabon" coords="997,911,993,925,988,934,1004,942,1017,936,1023,936,1014,913,1014,911" href="gabon/" title="Gabon" />
<area shape="poly" id="Republic Of Congo" coords="1043,911,1043,923,1038,934,1032,944,1023,950,1010,953,1004,942,1017,936,1023,936,1014,913,1014,911" href="republic-of-congo/" title="Republic Of Congo" />
<area shape="poly" id="Democratic Republic Of Congo" coords="1108,902,1114,907,1114,917,1108,923,1103,932,1105,950,1101,976,1103,988,1112,994,1105,1001,1095,990,1084,992,1079,986,1075,988,1062,978,1056,965,1051,965,1051,971,1038,969,1032,959,1010,961,1008,953,1021,950,1032,944,1043,923,1043,909,1045,900,1053,896,1060,902,1066,902,1069,898,1092,898,1097,902" href="democratic-republic-of-congo/" title="Democratic Republic Of Congo" />
<area shape="poly" id="Angola" coords="1010,961,1019,990,1008,1024,1038,1022,1066,1028,1073,1024,1066,1022,1066,996,1075,996,1075,988,1062,978,1056,965,1051,965,1051,971,1038,969,1038,969,1032,959" href="angola/" title="Angola" />
<area shape="poly" id="Sudan" coords="1075,877,1088,867,1092,871,1118,869,1125,854,1129,867,1142,852,1144,840,1155,823,1149,804,1142,796,1136,796,1131,802,1082,800,1079,812,1075,812,1075,812,1075,840,1062,846,1069,867,1071,867,1075,875" href="sudan/" title="Sudan" />
<area shape="poly" id="South Sudan" coords="1129,867,1129,881,1138,896,1129,904,1114,907,1108,902,1097,902,1092,898,1095,898,1077,879,1075,875,1088,867,1092,871,1116,869,1118,869,1125,854" href="south-sudan/" title="South Sudan" />
<area shape="poly" id="Uganda" coords="1131,902,1138,911,1138,917,1123,930,1103,930,1114,917,1114,907,1129,904" href="uganda/" title="Uganda" />
<area shape="poly" id="Rwanda" coords="1121,930,1103,940,1103,930,1118,930,1118,930" href="rwanda/" title="Rwanda" />
<area shape="poly" id="Burundi" coords="1105,950,1114,940,1121,930,1103,940" href="burundi/" title="Burundi" />
<area shape="poly" id="Eritrea" coords="1142,848,1151,848,1153,844,1170,850,1179,856,1183,856,1166,840,1164,840,1160,821,1155,823,1144,840" href="eritrea/" title="Eritrea" />
<area shape="poly" id="Djibouti" coords="1183,856,1181,863,1177,865,1173,865,1175,858,1179,856" href="djibouti/" title="Djibouti" />
<area shape="poly" id="Ethiopia" coords="1138,894,1153,907,1164,907,1170,902,1175,904,1181,900,1183,898,1192,898,1205,879,1196,879,1181,873,1177,865,1173,865,1175,858,1179,856,1170,850,1153,844,1151,848,1144,848,1140,854,1129,867,1129,884,1138,896" href="ethiopia/" title="Ethiopia" />
<area shape="poly" id="Somalia" coords="1183,856,1186,863,1196,865,1229,858,1222,879,1203,911,1179,930,1170,938,1170,907,1175,904,1183,898,1192,898,1205,879,1196,879,1183,873,1177,865,1183,861" href="somalia/" title="Somalia" />
<area shape="poly" id="Kenya" coords="1160,950,1170,938,1170,907,1175,904,1170,902,1164,907,1153,907,1138,894,1134,902,1131,902,1138,911,1138,917,1127,925,1147,938" href="kenya/" title="Kenya" />
<area shape="poly" id="Tanzania" coords="1157,950,1160,950,1164,973,1166,984,1157,988,1138,988,1136,978,1127,978,1112,969,1101,971,1105,950,1114,940,1121,930,1127,925,1157,946" href="tanzania/" title="Tanzania" />
<area shape="poly" id="Zambia" coords="1073,1024,1082,1024,1084,1028,1092,1028,1103,1015,1112,1015,1112,1009,1125,1003,1129,978,1125,978,1112,969,1101,971,1103,988,1112,994,1103,1001,1095,990,1084,992,1079,986,1075,988,1075,996,1066,996,1066,1022,1071,1022" href="zambia/" title="Zambia" />
<area shape="poly" id="Mozambique" coords="1166,984,1168,994,1168,1015,1160,1024,1147,1030,1136,1038,1142,1047,1140,1063,1127,1072,1127,1082,1121,1080,1121,1072,1116,1051,1127,1034,1125,1017,1112,1015,1112,1009,1125,1003,1129,978,1125,1003,1131,1009,1134,1022,1140,1022,1142,1009,1136,996,1138,986,1138,988,1157,988" href="mozambique/" title="Mozambique" />
<area shape="circle" id="Sao Tome and Principe" coords="973,925,8" href="sao-tome-principe/" title="Sao Tome and Principe" />
<area shape="poly" id="Malawi" coords="1129,978,1136,978,1138,988,1136,996,1142,1009,1138,1022,1134,1022,1131,1009,1125,1003" href="malawi/" title="Malawi" />
<area shape="poly" id="Namibia" coords="1008,1024,1021,1049,1025,1078,1034,1093,1053,1091,1053,1051,1060,1051,1058,1038,1064,1028,1038,1022" href="namibia/" title="Namibia" />
<area shape="poly" id="Zimbabwe" coords="1084,1028,1103,1049,1116,1051,1127,1034,1125,1017,1112,1015,1103,1015,1092,1028" href="zimbabwe/" title="Zimbabwe" />
<area shape="poly" id="Botswana" coords="1053,1065,1060,1080,1075,1072,1084,1070,1103,1051,1103,1049,1084,1028,1082,1024,1073,1024,1064,1030,1058,1038,1060,1051,1053,1051,1053,1070" href="botswana/" title="Botswana" />
<area shape="poly" id="Swaziland" coords="1121,1070,1114,1072,1114,1082,1121,1082" href="swaziland/" title="Swaziland" />
<area shape="poly" id="Lesotho" coords="1099,1088,1090,1097,1090,1105,1101,1099,1108,1097,1101,1088" href="lesotho/" title="Lesotho" />
<area shape="poly" id="South Africa" coords="1127,1080,1114,1105,1092,1122,1056,1130,1045,1130,1045,1109,1034,1093,1051,1091,1053,1091,1053,1070,1060,1080,1079,1070,1084,1070,1105,1049,1116,1051,1121,1070,1114,1072,1114,1082,1118,1082,1121,1080,1127,1082,1125,1082,1125,1082" href="south-africa/" title="South Africa" />
<area shape="poly" id="Madagascar" coords="1216,986,1201,1011,1188,1015,1188,1038,1183,1042,1183,1074,1196,1078,1209,1059,1216,1032,1222,1009,1220,984,1218,986" href="madagascar/" title="Madagascar" />
<area shape="poly" id="	y" coords="1001,162,1025,162,1032,154,1043,141,1071,141,1090,149,1097,149,1129,149,1149,149,1149,154,1114,156,1114,152,1099,152,1092,160,1084,179,1077,179,1056,179,1066,195,1088,191,1097,189,1105,189,1105,193,1090,198,1084,193,1066,198,1073,214,1079,218,1079,223,1075,225,1071,235,1056,229,1058,221,1056,200,1053,200,1049,208,1045,225,1040,239,1038,252,1032,252,1017,227,1017,212,1014,210,1008,210,999,202,999,191,999,162" href="	y/" title="Svalbard (	y)" />
<area shape="poly" id="Iran" coords="1281,781,1272,783,1257,773,1257,771,1251,771,1246,773,1238,773,1225,758,1220,752,1209,752,1207,748,1205,737,1196,729,1196,712,1190,702,1190,687,1199,687,1199,691,1209,687,1212,695,1214,697,1225,704,1240,695,1266,697,1281,708,1281,718,1277,725,1277,739,1281,741,1283,756,1294,771,1285,773" href="iran/" title="Iran" />
<area shape="poly" id="Turkmenistan" coords="1240,693,1235,685,1246,679,1238,668,1253,674,1268,664,1292,685,1313,697,1313,702,1303,702,1292,716,1281,718,1281,708,1266,697,1240,695" href="turkmenistan/" title="Turkmenistan" />
<area shape="poly" id="Uzbekistan" coords="1313,702,1316,702,1318,693,1313,689,1313,687,1324,679,1331,679,1331,685,1341,685,1339,672,1331,674,1331,670,1320,676,1309,672,1309,664,1300,658,1290,653,1283,660,1279,649,1272,658,1264,645,1253,647,1251,653,1253,674,1268,664,1290,683,1313,697" href="uzbekistan/" title="Uzbekistan" />
<area shape="poly" id="Kyrgyzstan" coords="1335,664,1387,664,1387,668,1365,681,1352,681,1350,689,1339,689,1326,687,1326,685,1341,685,1339,672,1331,674,1331,670" href="kyrgyzstan/" title="Kyrgyzstan" />
<area shape="poly" id="Tajikistan" coords="1316,702,1326,702,1333,695,1337,697,1337,704,1344,702,1354,697,1354,693,1350,689,1339,689,1326,687,1326,685,1331,685,1331,679,1324,679,1313,687,1318,693,1316,699" href="tajikistan/" title="Tajikistan" />
<area shape="poly" id="Afghanistan" coords="1283,754,1307,752,1311,743,1324,739,1331,727,1335,727,1337,710,1357,702,1354,697,1337,704,1337,697,1333,695,1326,702,1303,702,1292,716,1281,718,1277,725,1277,739,1281,741" href="afghanistan/" title="Afghanistan" />
<area shape="poly" id="Pakistan" coords="1318,792,1324,787,1335,785,1326,766,1341,762,1359,733,1350,729,1350,712,1346,708,1354,706,1354,702,1337,710,1335,727,1331,727,1324,739,1311,743,1307,752,1283,754,1285,758,1294,771,1285,773,1281,781,1309,783,1316,792" href="pakistan/" title="Pakistan" />
<area shape="poly" id="Nepal" coords="1428,762,1426,764,1398,750,1387,748,1387,758,1422,777,1430,779" href="nepal/" title="Nepal" />
<area shape="poly" id="Bhutan" coords="1432,764,1437,762,1448,762,1450,771,1435,771" href="bhutan/" title="Bhutan" />
<area shape="poly" id="Bangladesh" coords="1428,779,1435,802,1439,806,1443,798,1448,800,1450,810,1454,798,1452,789,1448,792,1454,785,1452,781,1439,781,1441,777,1430,773,1430,779" href="bangladesh/" title="Bangladesh" />
<area shape="poly" id="Sri Lanka" coords="1385,869,1383,888,1385,894,1389,894,1396,888,1396,879,1389,871" href="sri-lanka/" title="Sri Lanka" />
<area shape="poly" id="Kazakhstan" coords="1387,664,1389,653,1385,645,1396,645,1400,628,1415,630,1415,620,1422,614,1413,610,1402,599,1396,599,1387,593,1380,589,1365,570,1363,566,1350,574,1346,570,1344,572,1337,566,1333,559,1322,559,1316,564,1298,566,1292,570,1281,570,1277,584,1277,589,1281,599,1261,595,1251,601,1242,595,1233,591,1229,591,1218,595,1214,601,1209,603,1207,612,1203,618,1214,628,1216,633,1235,633,1235,639,1225,645,1220,653,1231,666,1231,674,1235,674,1238,668,1253,674,1251,649,1264,645,1272,658,1279,649,1283,660,1290,653,1300,658,1309,664,1309,672,1318,676,1331,670,1335,664" href="kazakhstan/" title="Kazakhstan" />
<area shape="poly" id="Mongolia" coords="1484,587,1504,591,1510,603,1530,603,1543,612,1560,612,1571,603,1586,607,1580,624,1591,624,1597,622,1604,633,1588,633,1569,647,1558,645,1560,653,1543,668,1530,668,1519,672,1506,666,1474,666,1469,651,1443,645,1441,624,1432,624,1426,614,1441,603,1450,599,1456,599,1469,610,1480,610,1480,605,1480,591" href="mongolia/" title="Mongolia" />
<area shape="poly" id="Philippines" coords="1606,817,1606,831,1599,831,1604,852,1593,871,1586,879,1591,884,1604,865,1617,867,1617,877,1610,890,1604,896,1604,898,1610,896,1621,884,1630,894,1634,896,1636,896,1640,888,1640,863,1627,842,1621,844,1619,825,1617,815" href="philippines/" title="Philippines" />
<area shape="poly" id="Vietnam" coords="1539,802,1528,812,1523,819,1539,831,1547,838,1547,850,1547,861,1532,867,1521,877,1517,867,1528,858,1536,850,1534,838,1526,825,1517,815,1521,810,1517,806,1510,806,1506,800,1506,798,1526,794" href="vietnam/" title="Vietnam" />
<area shape="poly" id="Cambodia" coords="1534,846,1508,848,1506,858,1517,867,1534,852,1536,850,1534,844" href="cambodia/" title="Cambodia" />
<area shape="poly" id="Laos" coords="1495,804,1519,829,1519,846,1519,848,1534,846,1534,835,1517,815,1521,810,1517,806,1510,806,1506,800,1506,800" href="laos/" title="Laos" />
<area shape="poly" id="Thailand" coords="1495,804,1476,817,1487,838,1487,852,1482,875,1493,888,1506,890,1493,875,1491,871,1493,854,1495,850,1506,858,1508,846,1519,848,1519,829,1502,810" href="thailand/" title="Thailand" />
<area shape="poly" id="Myanmar" coords="1450,808,1458,812,1463,821,1461,838,1463,840,1476,829,1478,838,1484,854,1484,854,1487,852,1487,838,1476,817,1495,804,1484,787,1480,789,1480,779,1487,769,1482,760,1476,764,1474,769,1469,769,1463,779,1463,787,1454,798" href="myanmar/" title="Myanmar" />
<area shape="poly" id="Malaysia" coords="1493,888,1500,909,1517,921,1519,909,1517,900,1508,890,1506,890" href="malaysia/" title="Malaysia" />
<area shape="poly" id="Malaysia" coords="1543,913,1552,913,1565,904,1571,898,1573,902,1575,902,1580,898,1578,894,1586,884,1593,890,1601,894,1601,898,1595,898,1595,902,1591,902,1578,902,1575,913,1573,919,1549,921,1547,917" href="malaysia/" title="Malaysia" />
<area shape="rect" id="Timor Leste" coords="1627,969,1638,982" href="timor-leste/" title="Timor Leste" />
<area shape="poly" id="Papua New Guinea" coords="1716,936,1718,976,1734,976,1740,969,1753,980,1770,984,1775,984,1786,976,1788,944,1779,936,1760,925,1744,927,1738,942,1727,938,1714,936" href="papua-new-guinea/" title="Papua New Guinea" />
<area shape="poly" id="Indonesia" coords="1465,890,1469,911,1484,934,1510,953,1530,967,1567,973,1597,976,1610,984,1627,973,1627,969,1578,969,1567,959,1554,955,1536,936,1519,930,1513,921,1495,909,1478,894" href="indonesia/" title="Indonesia" />
<area shape="poly" id="Indonesia" coords="1543,911,1541,923,1549,940,1569,944,1582,946,1593,923,1599,919,1591,907,1595,902,1578,902,1573,919,1549,921,1543,913,1543,913,1541,913,1543,915,1541,913,1541,913,1543,913,1543,913,1541,913,1543,909" href="indonesia/" title="Indonesia" />
<area shape="poly" id="Indonesia" coords="1604,919,1597,938,1601,957,1608,961,1630,957,1640,946,1656,944,1656,953,1669,953,1677,946,1686,950,1697,953,1703,959,1701,973,1710,971,1718,976,1716,936,1712,936,1710,934,1703,932,1695,932,1690,925,1684,919,1664,917,1651,909,1645,913,1640,927,1634,930,1625,930,1625,930,1625,923,1632,923,1636,913,1640,904,1647,898,1643,896,1634,900,1632,913,1627,917,1617,917,1606,917,1604,917" href="indonesia/" title="Indonesia" />
<area shape="circle" id="Fiji" coords="1931,1026,12" href="fiji/" title="Fiji" />
<area shape="circle" id="Solomon Islands" coords="1840,976,19" href="solomon-islands/" title="Solomon Islands" />
<area shape="circle" id="Marshall Islands" coords="1872,875,19" href="marshall-islands/" title="Marshall Islands" />
<area shape="poly" id="Andaman and Nicobar Islands" coords="1452,848,1452,873,1461,888,1465,886,1461,875,1458,856,1458,848" href="india/" title="Andaman and Nicobar Islands" />
<area shape="poly" id="Maldives" coords="1341,884,1346,930,1352,930,1350,884" href="maldives/" title="Maldives" />
<area shape="circle" id="Mauritius" coords="1261,1036,8" href="mauritius/" title="Mauritius" />
<area shape="rect" id="Netherlands Map" coords="984,1187,1108,1204" href="netherlands/" title="Netherlands Map" />
<area shape="rect" id="Belgium Map" coords="982,1210,1075,1227" href="belgium/" title="Belgium Map" />
<area shape="rect" id="Luxembourg Map" coords="984,1229,1112,1245" href="luxembourg/" title="Luxembourg Map" />
<area shape="rect" id="Switzerland Map" coords="984,1247,1105,1262" href="switzerland/" title="Switzerland Map" />
<area shape="rect" id="Croatia Map" coords="984,1287,1064,1302" href="croatia/" title="Croatia Map" />
<area shape="poly" id="Bosnia and Herzegovina Map" coords="984,1306,1097,1306,1097,1314,1112,1329,1112,1337,1006,1337,1008,1316,984,1321" href="bosnia/" title="Bosnia and Herzegovina Map" />
<area shape="rect" id="Slovakia Map" coords="984,1362,1075,1379" href="slovakia/" title="Slovakia Map" />
<area shape="rect" id="Hungary Map" coords="1155,1210,1257,1227" href="hungary/" title="Hungary Map" />
<area shape="rect" id="Serbia Map" coords="1157,1229,1240,1243" href="serbia/" title="Serbia Map" />
<area shape="rect" id="Moldova Map" coords="1157,1245,1259,1262" href="moldova/" title="Moldova Map" />
<area shape="rect" id="Macedonia Map" coords="1157,1266,1277,1281" href="macedonia/" title="Macedonia Map" />
<area shape="rect" id="Albania Map" coords="1157,1285,1248,1300" href="albania/" title="Albania Map" />
<area shape="rect" id="Lebanon Map" coords="1157,1325,1259,1339" href="lebanon/" title="Lebanon Map" />
<area shape="rect" id="Guinea Bissau Map" coords="1157,1344,1307,1358" href="guinea-bissau/" title="Guinea Bissau Map" />
<area shape="rect" id="Guinea Map" coords="1157,1362,1244,1379" href="guinea/" title="Guinea Map" />
<area shape="rect" id="Ghana Map" coords="1324,1187,1406,1206" href="ghana/" title="Ghana Map" />
<area shape="rect" id="Togo Map" coords="1322,1210,1393,1227" href="togo/" title="Togo Map" />
<area shape="rect" id="Benin Map" coords="1322,1227,1398,1243" href="benin/" title="Benin Map" />
<area shape="rect" id="Cameroon Map" coords="1322,1245,1439,1262" href="cameroon/" title="Cameroon Map" />
<area shape="poly" id="Equatorial Guinea Map" coords="1322,1266,1439,1266,1439,1281,1409,1281,1409,1300,1348,1300,1348,1300,1348,1283,1322,1283" href="equatorial-guinea/" title="Equatorial Guinea Map" />
<area shape="rect" id="Rwanda Map" coords="1322,1304,1419,1321" href="rwanda/" title="Rwanda Map" />
<area shape="rect" id="Cambodia Map" coords="1322,1325,1439,1339" href="cambodia/" title="Cambodia Map" />
<area shape="rect" id="Panama Map" coords="1322,1344,1422,1358" href="panama/" title="Panama Map" />
<area shape="rect" id="Malawi Map" coords="1322,1360,1415,1379" href="malawi/" title="Malawi Map" />
<area shape="rect" id="Liechtenstein Map" coords="1474,1185,1617,1204" href="liechtenstein/" title="Liechtenstein Map" />
<area shape="rect" id="Montenegro Map" coords="1474,1206,1608,1222" href="montenegro/" title="Montenegro Map" />
<area shape="rect" id="Kosovo Map" coords="1474,1224,1567,1241" href="kosovo/" title="Kosovo Map" />
<area shape="poly" id="Palestine Map" coords="1476,1245,1595,1245,1595,1279,1508,1281,1506,1262,1476,1262" href="palestine/" title="Palestine Map" />
<area shape="poly" id="Antarctica Map" coords="1101,1478,1827,1478,1803,1457,1770,1448,1755,1442,1747,1436,1755,1429,1749,1429,1738,1434,1701,1423,1688,1406,1684,1419,1660,1413,1662,1427,1653,1429,1643,1419,1617,1431,1584,1423,1567,1408,1556,1415,1547,1427,1517,1411,1493,1413,1484,1425,1424,1427,1400,1438,1383,1444,1372,1457,1348,1478,1324,1478,1324,1459,1331,1444,1324,1440,1279,1436,1257,1429,1257,1421,1244,1411,1222,1419,1222,1429,1207,1438,1192,1440,1173,1448,1164,1457,1162,1467,1155,1473,1142,1463,1131,1450,1127,1459,1127,1469,1112,1469" href="antarctica/" title="Antarctica Map" />
<area shape="poly" id="Antarctica Map" coords="549,1454,555,1465,560,1473,566,1461,573,1440,560,1436,566,1415,601,1385,612,1383,607,1379,594,1377,631,1360,646,1348,692,1344,700,1350,692,1350,687,1346,646,1350,631,1367,612,1375,616,1379,635,1375,644,1379,629,1385,629,1394,616,1396,605,1419,583,1429,583,1448,594,1454,601,1473,549,1478,542,1465,531,1471,523,1471,523,1463,531,1465,531,1471,544,1465" href="antarctica/" title="Antarctica Map" />
<area shape="circle" id="Map of Cook Islands" coords="63,1036,32" href="cook-islands/" title="Map of Cook Islands" />
<area shape="circle" id="South Georgia" coords="739,1296,25" href="united-kingdom/south-georgia-and-the-south-sandwich-islands.html" title="South Georgia" />
<area shape="circle" id="South Sandwich" coords="826,1325,47" href="united-kingdom/south-georgia-and-the-south-sandwich-islands.html" title="South Sandwich" />
<area shape="rect" id="Northern Mariana Islands" coords="1747,804,1887,844" href="country-profile/northern-mariana-islands.html" title="Northern Mariana Islands" />
<area shape="rect" id="Guam Map" coords="1671,848,1770,869" href="usa/guam/" title="Guam Map" />
<area shape="rect" id="Federated States Of Micronesia Zip Codes" coords="1731,875,1848,911" href="usa/zipcodes/federated-states-of-micronesia/" title="Federated States Of Micronesia Zip Codes" />
<area shape="rect" id="Kiribati Map" coords="1900,913,1991,936" href="kiribati/" title="Kiribati Map" />
<area shape="rect" id="Map of St Vincent and the Grenadines" coords="1467,1289,1638,1335" href="saint-vincent-the-grenadines/" title="Map of St Vincent and the Grenadines" />
<area shape="rect" id="Antigua and Barbada" coords="609,804,757,819" href="antigua/" title="Antigua and Barbada" />
<area shape="rect" id="Dominica" coords="614,817,687,835" href="dominica/" title="Dominica" />
<area shape="rect" id="Saint Lucia" coords="625,838,689,852" href="saint-lucia/" title="Saint Lucia" />
<area shape="rect" id="Saint Helena" coords="884,1015,962,1053" href="united-kingdom/saint-helena.html" title="Saint Helena" />
<area shape="rect" id="Cocos Islands Map" coords="1411,988,1484,1026" xyz = ('Australia')" href="australia/cocos-islands-map.html" title="Cocos Islands Map" />
<area shape="rect" id="Christmas Island Map" coords="1502,984,1595,1022" href="australia/christmas-island-map.html" title="Christmas Island Map" />
<area shape="rect" id="Reunion map" coords="1222,1042,1346,1063" href="france/reunion-map.html" title="Reunion map" />
<area shape="rect" id="Wallis and Futuna " coords="1864,961,1985,1001" href="france/wallis-and-futuna.html" title="Wallis and Futuna " />
<area shape="rect" id="Nauru Map" coords="1804,925,1862,946" href="nauru/" title="Nauru Map" />
<area shape="rect" id="Map of Vanuatu" coords="1803,1006,1870,1028" href="vanuatu/" title="Map of Vanuatu" />
<area shape="rect" id="Samoa Map" coords="1944,1003,1996,1024" href="samoa/" title="Samoa Map" />
<area shape="rect" id="Tonga Map" coords="1940,1049,1993,1068" href="tonga/" title="Tonga Map" />


</map>
</div>
<div>
	
</div>
</body>
</html>