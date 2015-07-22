{extends file="index.tpl"}
{block name="body"}
<div class="tabbable tabbable-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab_1_2">Classic Search</a></li>
        <li><a data-toggle="tab" href="#tab_1_3">Advanced Search</a></li>
    </ul>
    <div class="tab-content">
            <div id="tab_1_2" class="tab-pane active">
                <div class="row-fluid search-forms search-default">
                    <div class="chat-form">
                        <div class="input-cont">   
                            <input type="text" id="search" name="search" onkeypress="pageSubmit(event,'Cls-Search');" placeholder="Search..." class="m-wrap"/>
                        </div>
                        <button id="Cls-Search" type="button" onClick="javascript:loadSearchResult();" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                    </div>
                </div>
                <div id="clsSearch" >
					
                </div>
                <div class="space5"></div>
                <!--<div class="pagination pagination-right">
                        <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                        </ul>
                </div>-->
            </div>
            <!--end tab-pane-->
            <div id="tab_1_3" class="tab-pane">
                    <div class="row-fluid search-forms search-default">
                        <div class="chat-form">
                            <div class="span3" style="width:22%;">
                                <div class="controls">  
                                    <Select class="m-wrap" name="searchByID" id="searchByID">
                                        <Option value="1" selected>Search By Name</Option>
                                        <Option value="2">Search By Job Code</Option>
                                        <Option value="3">Search By Employer</Option>
                                        <Option value="4">Search By VCC Number</Option>
                                        <Option value="5">Search By Employee Code</Option>
                                        <Option value="6">Search By Claim Number</Option>
                                        <Option value="7">Search By Non Profit</Option>
                                    </Select>
                                </div>
                            </div>
                            <div class="span10" style="width:78%;margin:0px;">
                                <div class="controls"> 
                                    <div class="input-cont">   
                                        <input type="text" onkeypress="pageSubmit(event,'Adv-Search');" id="advnSearch" name="advnSearch" placeholder="Search..." class="m-wrap"/>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="Adv-Search" onClick="javascript:loadAdvSearchResult();" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                        </div>
                    </div>
                    <div id="AdvancedSearch">
                        
                    </div>
                    <!--<div class="space5"></div>
					{if $totalSet>10}
						<div class="pagination pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li class="active"><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					{/if}-->
            </div>
            <!--end tab-pane-->
    </div>
</div>

<script type="text/javascript">
	
    var searchAJAXCALL = function(postStr,action,ID)
    {
        var xmlhttp;
        
        if (window.XMLHttpRequest) //Code for IE7+, Firefox, Chrome, Opera, Safari
        {
            xmlhttp=new XMLHttpRequest();
        }
        else //Code for IE6, IE5
        {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById(ID).innerHTML=xmlhttp.responseText;
            }
        }

        xmlhttp.open("POST","{$SERVER_PATH}system/search.php?action="+action+"&"+postStr,true);
        xmlhttp.send();
    }
    
    var loadSearchResult = function()
    {
        var srch = document.getElementById('search').value;
        var Str = "search="+srch;
        searchAJAXCALL(Str,"do_search","clsSearch");
    }
    
    var loadAdvSearchResult = function()
    {
        var srch = document.getElementById('advnSearch').value;
        var ID = document.getElementById('searchByID').value;
        
        var Str = "search="+srch+"&SearchID="+ID;
        searchAJAXCALL(Str,"do_advancedSearch","AdvancedSearch");
    }

	var pageSubmit = function(e,Id){
		e = e || window.event;
		if(e.keyCode==13){
			document.getElementById(Id).click();
		}
	}
</script>
{/block}