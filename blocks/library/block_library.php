<?php
    	class block_library extends block_base {
    		public function init() {
        		$this->title = get_string('library', 'block_library');
			$this->version = 2018031300;
    		}

		public function get_content() {
    			if ($this->content !== NULL) {
        			return $this->content;
    			}

    			$this->content = new stdClass;
    			$this->content->text = '
<style type="text/css">
.categoryitems{display: none}
a.hiddenajaxlink{display: none}
</style>
<style type="text/css">
.subcategoryitems{display: none}
a.hiddenajaxlink{display: none}
</style>
<style type="text/css">
.categoryitems{display: none}
a.hiddenajaxlink{display: none}
</style>
<style type="text/css">
.subcategoryitems{display: none}
a.hiddenajaxlink{display: none}
</style>

<!--main styles -->
    
    <style type="text/css">
<!--
.wrapper{width:100%;
     }

.arrowlistmenu{
    font-family: "Gotham 4r","Gotham A","Gotham B","Helvetica Neue",Helvetica,Arial,sans-serif;
margin-left:auto;
margin-right:auto;
width: 175px; /*width of accordion menu*/
}

.arrowlistmenu .menuheader{ /*CSS class for menu headers in general (expanding or not!)*/
background: none repeat scroll 0 0 #0069AA;
border: 0 none;
border-radius: 0.3em 0.3em 0.3em 0.3em;
color: #FFFFFF;
cursor:pointer;
font-size: 100%;
font-style: normal;
font-weight: 500;
margin: 0;
padding: 0.40em .8em;
text-align: center;
text-decoration: none;
margin-top: 1em; /*bottom spacing between header and rest of content*/
    margin-right:auto;
margin-left:auto;
}
    
.arrowlistmenu .menuheader:hover{
background: none repeat scroll 0 0 #004977;
}
    
.arrowlistmenu .openheader{ /*CSS class to apply to expandable header when it\'s expanded*/
background: none repeat scroll 0 0 #004977;
    }

.arrowlistmenu ul{ /*CSS for UL of each sub menu*/
list-style-type: none;
padding: 0;
margin:.5em;
}


.arrowlistmenu ul li a:visited{
color: #3366ff;
}
.arrowlistmenu ul li a:hover{
background-color: #ccc !important;
}
    
.arrowlistmenu p{
padding-bottom: .3em;
color: #4C4C4C;
font-size:90%;
}

.specific li{
float:left;
padding:.2em;
}
.summon input{
float:left;
margin-bottom:1.5em;
border: 0;
display: block;
line-height: 1.887;
height: 2.3em;

}
.summon-search-field{

border-radius: 3px;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.summon-search-button{
width: 50px;
border-radius: 0 .3em .3em 0;
padding: 0;

-webkit-appearance: button;
cursor: pointer;
font-style: normal;
position: relative;
background: #0069aa;
color: #fff;
font-weight: 400;
text-align: center;
text-decoration: none;
vertical-align: middle;
white-space: nowrap;
-moz-box-sizing: border-box;
box-sizing: border-box;
}



.specific li a{
color: #3366ff;
display: inline-block;
curson:pointer;
padding: .3em;
text-decoration: none;
border: 1px solid #dadada;
border-radius:.3em .3em .3em .3em;
font-size: 90%;
}


.specific p{
padding: .8em 0em .8em 0em;

}
    
    
.fancylist ul,.fancylist p{
padding-left:.5em;
margin:1em;
}
.fancylist li {
list-style:none; 
padding-left:.2em;
}

.fancylist li:before {
color:#ed0000; /* set color to Red */
content:"\2022"; /* /2022 is the numerical unicode for &bull; */
font-size:1.5em; /* set the font-size of the bullet if necessary. Make sure to use em or %*/
padding-right:.15em; /* give the bullet some padding from the text Make sure to use em*/
position:relative;
top:.13em; /* set the vertical position of the bullet if necessary. Make sure to use em or % */
}
.fancylist a{
text-decoration:none;
}
-->
</style>

    <script type="text/javascript" src="https://moodle.bethel.edu/blocks/library/jquery.min.js">
</script>

<script type="text/javascript" src="https://moodle.bethel.edu/blocks/library/ddaccord.js">
<!--

    /***********************************************
    * Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
    * This notice must stay intact for legal use
    ***********************************************/

    -->
    </script> <script type="text/javascript">
<!--


    ddaccordion.init({ //top level headers initialization
    headerclass: \'expandable\', //Shared CSS class name of headers group that are expandable
    contentclass: \'categoryitems\', //Shared CSS class name of contents group
    revealtype: \'click\', //Reveal content when user clicks or onmouseover the header? Valid value: \'click\', \'clickgo\', or \'mouseover\'
    mouseoverdelay: 200, //if revealtype=\'mouseover\', set delay in milliseconds before header expands onMouseover
    collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
    defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
    onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
    animatedefault: false, //Should contents open by default be animated into view?
    persiststate: true, //persist state of opened contents within browser session?
    toggleclass: [\'\', \'openheader\'], //Two CSS classes to be applied to the header when it\'s collapsed and expanded, respectively [\'class1\', \'class2\']
    togglehtml: [\'prefix\', \'\', \'\'], //Additional HTML added to the header when it\'s collapsed and expanded, respectively  [\'position\', \'html1\', \'html2\'] (see docs)
    animatespeed: \'fast\', //speed of animation: integer in milliseconds (ie: 200), or keywords \'fast\', \'normal\', or \'slow\'
    oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
    //do nothing
    },
    onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
    //do nothing
    }
    })

    ddaccordion.init({ //2nd level headers initialization
    headerclass: \'subexpandable\', //Shared CSS class name of sub headers group that are expandable
    contentclass: \'subcategoryitems\', //Shared CSS class name of sub contents group
    revealtype: \'click\', //Reveal content when user clicks or onmouseover the header? Valid value: \'click\' or \'mouseover
    mouseoverdelay: 200, //if revealtype=\'mouseover\', set delay in milliseconds before header expands onMouseover
    collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
    defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
    onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
    animatedefault: false, //Should contents open by default be animated into view?
    persiststate: true, //persist state of opened contents within browser session?
    toggleclass: [\'opensubheader\', \'closedsubheader\'], //Two CSS classes to be applied to the header when it\'s collapsed and expanded, respectively [\'class1\', \'class2\']
    togglehtml: [\'none\', \'\', \'\'], //Additional HTML added to the header when it\'s collapsed and expanded, respectively  [\'position\', \'html1\', \'html2\'] (see docs)
    animatespeed: \'fast\', //speed of animation: integer in milliseconds (ie: 200), or keywords \'fast\', \'normal\', or \'slow\'
    oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
    //do nothing
    },
    onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
    //do nothing
    }
    })


    -->
    </script><style type="text/css">
.categoryitems{display: none}
a.hiddenajaxlink{display: none}
</style><style type="text/css">
.subcategoryitems{display: none}
a.hiddenajaxlink{display: none}
</style> 
                        
    <div class="wrapper">

<!--header image-->
      <div class="image">
        <a style="border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; border-image: initial;" href="http://www.bethel.edu/library/"><img src="https://moodle.bethel.edu/blocks/library/library_graphic.png"></a>
      </div>

<!– This script applies the PrimoQuery to the searchForm –>
<script type="text/javascript">
    function searchPrimo() 
    {
        document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
        document.forms["searchForm"].submit();
    }
</script>
<div class="arrowlistmenu">
    <!--Menu Item 1 -->
    <!-- First Drop down menu --> 
    <h3 class="menuheader expandable openheader" headerindex="0h">
        <span class="accordprefix"></span>
        <span class="accordprefix"></span>
        Library Search
        <span class="accordsuffix"></span>
        <span class="accordsuffix"></span>
    </h3>

    <ul class="categoryitems" contentindex="0c" style="display: block;">
        <li>
            <p>
                Articles, Books, Videos and More
            </p>
            <p>
                <a href="http://libguides.bethel.edu/c.php?g=670772&p=4721385">Find out more about how to use CLICsearch</a>
            </p>
            <div id="wcs2n">
                <!– Search field for Primo excludes newspaper articles, reviews, and dissertations–>
                <form action="https://clicsearch.bethel.edu/primo-explore" enctype="application/x-www-form-urlencoded; charset=utf-8" id="simple" method="get" name="searchForm" onsubmit="searchPrimo()" target="_blank">
                    <!-- Customizable Parameters -->
                    <input name="institution" type="hidden" value="01CLIC_BETHEL" /> 
                    <input name="vid" type="hidden" value="BETHEL" /> 
                    <input name="tab" type="hidden" value="default_tab" /> 
                    <input name="search_scope" type="hidden" value="bethel" /> 

                    <input name="mode" type="hidden" value="Basic" /> 
                    <!-- Fixed parameters --> 
                    <input name="displayMode" type="hidden" value="full" /> 
                    <input name="bulkSize" type="hidden" value="35" /> 
                    <input name="highlight" type="hidden" value="true" /> 
                    <input name="dum" type="hidden" value="true" /> 
                    <input id="primoQuery" name="query" type="hidden" /> 
                    <input name="displayField" type="hidden" value="all" /> 
                    <!-- Enable this if "Expand My Results" is enabled by default in Views Wizard --> 
                    <input name="pcAvailabiltyMode" type="hidden" value="true" /> 
                    <input id="primoQueryTemp" size="50" style="line-height: 3em; height: 3em; width: 75%; border-radius: .3em .3em .3em .3em; position: relative; top: 1px;" type="text" value="" />
                    <!-- Added three lines to create necessary exclude facets --> 
                    <input type="hidden" name="facet" value="rtype,exclude,newspaper_articles">
                    <input type="hidden" name="facet" value="rtype,exclude,reviews">
                    <input type="hidden" name="facet" value="rtype,exclude,dissertations">
                    <!-- Search Button --> 
                    <input class="btn search-go"; alt="Search" id="go" onclick="searchPrimo()" style="border-radius: .3em .3em .3em .3em;" title="Search" type="button" value="Search" />
                    <a style="font-family: Gotham A,Gotham B,Helvetica,Arial,sans" href="https://clicsearch.bethel.edu/primo-explore/search?vid=BETHEL&lang=en_US&sortby=rank&mode=advanced">Advanced Search</a>
                </form>
            </div>
        </li>
        <!-- Links to library pages on these topics --> 
        <li>
            <p style="clear:both;">
                Or, Find Something Specific
            </p>
            <ul class="specific">
                <li>
                    <a href="http://www.bethel.edu/library/research/find/scholarly-articles">Scholarly Articles</a>
                </li>
                <li>
                    <a href="http://www.bethel.edu/library/research/find/books">Books</a>
                </li>                                                        
                <li>
                    <a href="https://www.bethel.edu/library/research/find/theses">Theses</a>
                </li>
                <li>
                    <a href="http://www.bethel.edu/library/research/find/ebooks">eBooks</a>
                </li>
                <li>
                    <a href="http://www.bethel.edu/library/research/find/video">Video</a>
                </li>
            </ul>
            <div style="clear:both;"></div>
        </li>
    </ul>

    <!--Menu Item 2-->
    <!-- Second Drop down menu --> 
    <h3 class="menuheader expandable" headerindex="1h">
        <span class="accordprefix"></span>
        <span class="accordprefix"></span>
        In-depth Research
        <span class="accordsuffix"></span>
        <span class="accordsuffix"></span>
    </h3>
    <ul class="categoryitems specific" contentindex="1c" style="display: none;">
        <li>
            <a href="http://www.bethel.edu/library/research/find/scholarly-articles">Use article databases</a>
            <p>
                Find scholarly articles in your subject
            </p>
        </li>         
        <li>
            <a href="http://libguides.bethel.edu/browse.php?o=s" target="_blank">Lookup Research Guide</a>
            <p>
                Consult a subject page--find where to search &amp; how to get right to what you need.
            </p>
        </li>
        <li>
            <a href="https://www.bethel.edu/library/research/research-appointment">Meet with a librarian</a>
            <p>
                Gain confidence and expertise in your research
            </p>
        </li>
    </ul>
    <div style="clear:both"></div>


    <!--End Menu-->
</div>
<div class="fancylist">
    <ul>
        <li>
            <a href="https://www.bethel.edu/library/accounts#refworks" target="_blank">RefWorks Login &amp; Help</a>
        </li>
    </ul>
    <p>
        Questions? <a href="http://www.bethel.edu/library/help/">Contact the Library</a>
    </p>
</div>
                

<!--End Wrapper-->
  </div>
';
    			$this->content->footer = '';
			return $this->content;
		}
	}
?>
