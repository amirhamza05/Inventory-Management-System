
var action_id;

function get_ajax(action_data,data){
  url=action_data['url'];
  div=action_data['div'];
  load=action_data['load'];
  
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {

            if(load==1)window.location.href = "";
            else document.getElementById(div).innerHTML=response;
        }
    });

}

function get_ajax1(action_data,data){
  url=action_data['url'];
  div=action_data['div'];
  load=action_data['load'];
  
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {

            if(load==1)window.location.href = "";
            else document.getElementById(div).innerHTML=response;
        }
    });

}



function loader(divname,size=0){
  div_ob=document.getElementById(divname);
  img_size="";
  if(size!=0)img_size="height: "+size+"px; width:"+size+"px";
  img_url="src='upload/site_content/processing1.gif'";
  img_style="style='margin-top:35px"+img_size+"'";
  img="<center><img "+img_style+img_url+" /></center>";
  div_ob.innerHTML =img;
}

function btn_loader(btn){
 set_html(btn,"hello")
}

function get_action_data(_div, _url,_load = 0) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}


function get_value(div){
	val=document.getElementById(div).value;
	return val;
}

function set_html(div,val){
  document.getElementById(div).innerHTML=val;
}

function set_value(div,val){
  document.getElementById(div).value=val;
}

function get_checkbox_value(field_name){
  var checkboxes = document.getElementsByName(field_name);
  var vals = "";
  for (var i=0, n=checkboxes.length;i<n;i++) 
     {
        if (checkboxes[i].checked) 
        {
          vals += ","+checkboxes[i].value;
        }
   }

  if (vals) vals = vals.substring(1);
return vals;
}


function print(divName){
    var printContents = document.getElementById(divName).innerHTML;
    w=1150;
    h=750;
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    myWindow=window.open('', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);;
    myWindow.document.write(printContents);
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
  }

  //insert_update_function

  

  function store_data(data_info){
    var data=data_info.data;
    var id=action_id;
    var action=data_info.action;
    var table=data_info.table;

    var url=data_info.url;
    var ref=data_info.ref;
    
    var post_name=data_info.post_name;
    var div=data_info.div;
    var error_div=data_info.error_div;

    if(action=="delete"){
      var g_data={};
      g_data["id"]=id; 
      var data=make_data(table,action,g_data);
      send_data(div,url,ref,post_name,data);
      return;
    }

    document.getElementById(error_div).style.display="node";
    
    check_data(data,error_div,function(ok,g_data) {
        if(ok){
          if(action=="update")g_data["id"]=id;
          var data=make_data(table,action,g_data);
          send_data(div,url,ref,post_name,data);
        }
    });

  }

  function make_data(table,action,g_data){
      var data={};
      data["table"]=table;
      data["action"]=action;
      data["data"]=g_data;
      return data;
  }

  function check_data(data,error_div,callback){
      var g_data=get_data(data);
      var ok=filter_data(g_data,data,error_div);
      callback(ok,g_data);
  }

  function get_data(data){
    var g_data={};
    data.forEach(function(key) {
      g_data[key[0]]=get_value(key[0]);
    });
    return g_data;
  }

  function filter_data(g_data,data,error_div){
    var filter_ok=1,co=0;
    var error_msg="";
    data.forEach(function(key) {
      if(key[1]==1){
          if(g_data[key[0]]==""){
            filter_ok=0;
            var error_msg1="<li>Please Enter " + key[0] +"</li>";
            error_msg=error_msg+error_msg1;
          }
        }
        co++;
    });
    if(error_msg!="")document.getElementById(error_div).style.display="block";
    set_html(error_div,error_msg);
    return filter_ok;
  }

  function send_data(div,url,ref,post_name,g_data){
    var data={};
    data[post_name]=g_data;
    loader(div);
    console.log(data);
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            if(ref==1)window.location.href = "";
            else {
              if(div=="modal_lg_msg" || div=="modal_md_msg" || div=="modal_sm_msg"){
                  document.getElementById(div).style.display="block";
              }
              set_html(div,response);

            }
        }
    });
    
  }