<?php

header("Content-Type: text/css");
require_once '../components/autoload.php';

$c = new Config();
$conf = $c->conf('', '../content/interface.xml', '../content/interfaces');
$info = $c->info($conf['db']['dsn'], $conf['db']['pref'], $conf['db']['user'], $conf['db']['pass']);

?>

* {
margin: 0;
padding: 0;
}
body {
font: 12px "Verdana", Trebuchet MS, Tahoma, Arial, Helvetica, sans-serif; 
color: #333;
line-height: 18px;
}
a {
color: <?=$info['sim']['cor-links']?>;
text-decoration: none;
}
a:hover {
text-decoration: underline;
}

.clear { clear: both; }
.center { text-align: center; }
.left { float: left; }
.right { float: right; }
.txt_r { text-align: right; }

img {border: none;}

input.ipt_butt {
cursor: pointer;
color: #FFFFFF;
line-height: 12px;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
background: #6699CC;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-khtml-border-radius: 3px;
border-radius: 3px;
text-shadow: 1px 1px #555;
}
input.ipt_butt {
margin: 0;
border: solid 1px #4684C1;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-khtml-border-radius: 3px;
height: 30px;
padding: 0 15px;
}

a.ipt_butt {
display: block;
float: left;
color: #FFF;
font-family: Arial, Helvetica, sans-serif;
background: #6699CC;
text-shadow: 1px 1px #555;
text-decoration: none;
border: solid 1px #4684C1;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
padding: 8px 15px;
}

#page-wrap {
min-width:960px;
max-width:1600px;
margin:0 auto;
}
#main-content {
float:right;
width:100%;
margin-left:-320px;
position:relative;
}
#main-content label {
font-weight: bold;
}
.ul_general {
margin-left: 15px;
}
#main {
margin-left:270px;
margin-right:15px;
padding-top:20px;
position:relative;
}
#crumbs {
font-size: 11px;
padding: 0 0 15px 0;
color: #888;
background: #FFF;
}
#main h1 {
font-size: 24px;
font-weight: normal;
border-bottom: dashed 1px #BBB;
padding: 0 0 10px 0;
margin: 10px 0 30px 0;
text-shadow: 2px 2px #DDD;
}
.icon_title {
float: left; 
position: relative; 
left: 0; 
top: -7px; 
padding-right: 10px;
width: 64px;
height: 64px;
background: #FFF;
border: none;
}
#header {
background: url(<?=$info['images']?>/sim/n-header-bg-<?=$info['sim']['header-bg']?>.png) top repeat-x;
height: 141px;
}
#top {
height: 78px;
padding: 10px 10px;
border-bottom: solid 1px #DDD;
}
#top a{
margin: 0 5px;
}
#left-sidebar {
padding:0 15px;
width: 220px;
float: left;
position:relative;
padding: 15px 10px 0 10px;
border-right: solid 1px #D0D0D0;
border-bottom: solid 1px #D0D0D0;
background: #F4F4F4;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.box_side {
border: solid 1px #DDD;
background: #FFF;
padding: 4px 4px 12px 4px;
margin: 0 0 15px 0;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.box_side_title {
background: url(<?=$info['images']?>/sim/n-bg_title_side.jpg) top center no-repeat;
text-shadow: 1px 1px #FFF;
font-weight: bold;
font-size: 11px;
padding: 3px 6px;
margin: 0 0 10px 0;
}
.box_side_cont {
padding: 0 7px;
}
.box_side ul {
margin: 0;
padding: 0;
list-style: none;
}
.ul_txt li{
padding: 5px 0;
font-size: 11px;
}
.ul_txt li a {
display: inline !important;
background: none !important;
}
.box_side li{
border-bottom: dashed 1px #CCC;
}
.box_side li a{
padding: 5px 2px;
display: block;
}
.box_side li a:hover{
background: #F5F5F5;
}
.message_side {
border: solid 1px #FDD845;
background: #FFF6BF;
margin: 0 0 15px 0;
padding: 10px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
#footer {
text-align: center;
padding-top: 40px;
padding-bottom: 20px;
font-size: 11px;
margin-top: 20px;
color: #999;
clear: both;
width: 100%;
background: url(<?=$info['images']?>/sim/n-bg_footer.png) top center repeat-x;
}
.menu-hv { position: relative; margin: 0 0 0 15px; padding: 0; display: block; z-index: 100; }
.menu-hv * { margin: 0; padding: 0 ; list-style: none}
.menu-hv li { position: relative; line-height: 1.2em; vertical-align: top }
.menu-hv a { display: block; line-height: 1.2em }
.menu-hv li ul { position: absolute; visibility: hidden; border-left: solid 1px #CCC; border-bottom: solid 1px #CCC; padding: 0 0 2px 0; background: #DDD; }
.menu-hv li:hover ul, 
.menu-hv li.hover ul { visibility: visible }
.menu-hv li:hover ul ul, 
.menu-hv li.hover ul ul { visibility: hidden }
.menu-hv li li:hover ul, 
.menu-hv li li.hover ul { visibility: visible }
.menu-hv li li:hover ul ul, 
.menu-hv li li.hover ul ul { visibility: hidden }
.menu-hv li li li:hover ul, 
.menu-hv li li li.hover ul { visibility: visible; }
.menu-hv:after, .menu-hv.after { content: "."; line-height: 0px; clear: both; display: block; visibility: hidden; }
.menu-hv li { float: left; }
.menu-hv li ul li { float: none; width: 175px; background: #DDD; }
.menu-hv li ul li a { border-bottom: dashed 1px #CCC; padding: 10px; margin: 0 2px; background: #FFF; }
.menu-hv li ul li a:hover { background: #F5F5F5; }
.menu-hv li ul li ul { position: absolute; left: 100%; top: 0; }
.menu-hv li { border-right: solid 1px #CCC; border-left: solid 1px #FFF; }
.menu-hv li a { font-weight: bold; padding: 12px 15px; }
.menu-hv li a:hover { background-color: #FFF; text-decoration: none; }
.pg_right {
float: right;
color: #AAA; 
text-align: right;
}
.pages {
padding: 10px 0 0 0;
text-align: right;
}
.pages a {
border: solid 1px #267cb2;
padding: 3px 3px 3px 3px;
height: 15px;
line-height: 25px;
font-size: 11px;
}
.pages a:hover {
background: #267cb2;
color: #FFF;
}
.pages_crr {
border: solid 1px #267cb2;
padding: 3px 3px 3px 3px;
height: 15px;
line-height: 25px;
font-size: 11px;
color: #FFF;
background: #267cb2;
}
.row_a {
background: #F5F5F5;
}
.table_ab {
margin: 20px 0 0 0;
font-size: 11px;
border-bottom: solid 1px #C6D5E1;
border-left: solid 1px #C6D5E1;
}
.table_ab td {
padding: 5px 10px;
line-height: 22px;
border-top: solid 1px #C6D5E1;
border-right: solid 1px #C6D5E1;
}
.tha {
color: #FFF;
background: #4B708D url(<?=$info['images']?>/sim/n-header-grid-<?=$info['sim']['header-grid']?>.gif) repeat-x;
}
.td_a {
border-top: solid 1px #EEE;
}
.adg {
border: solid 1px #C6D5E1;
line-height: 24px;
padding: 10px; 
margin: 0 0 20px 0;
}
#rol { background: #DEEFFF; cursor: text; }
#bg { }
select, input, textarea {
margin-top: 5px;
}
input:hover, select:hover, textarea:hover {
border-color: #555;
}
input:focus, select:focus, textarea:focus {
border-color: #555;
}
.box_form {
border: solid 0px;
float: left;
width: 49%;
padding-bottom: 15px;
min-height: 56px;
}
.box_form_full {
float: left;
width: 99%;
border: solid 0px;
padding-bottom: 15px;
min-height: 56px;
}
.box_form input.ipt_text {
width: 90%;
}
.box_form_full input.ipt_text, textarea, select {
width: 94%;
}
.ipt_text {
border:1px solid #CCC;
padding:6px 10px;
background: #F9F9F9;
}
.ipt_file {
border:1px solid #CCC;
padding:3px 9px;
background: #F9F9F9;
}
#ipt_rb {
width: 13px;
height: 13px;
margin-top: 15px;
}
select {
border: 1px solid #CCC;
padding:5px 5px;
margin-top: 5px;
background: #F9F9F9;
}
textarea {
border: 1px solid #CCC;
padding:6px 10px;
margin-top: 5px;
font-size: 12px;
font-family: Verdana;
height: 100px;
background: #F9F9F9;
}
.list_inputs {
list-style: none;
}
.list_inputs li {
float: left;
width: 25%;
}
.status0 { color:#f00 } /* desativado ou cancelado */
.status1 { color:#444444 } /* ativado ou concluído */
.status2 { color:#ff9900 } /* novo */
.status3 { color:#6666ff } /* em andamento */
.status4 { color:#339900 } /* enviado */
.status5 { color:#cc00ff } /* orçamento */
.message {
margin: 10px 0px;
padding: 15px 15px 15px 40px;
}
.message.error { 
color: #9e1111; 
background: #f5e8e8 url(<?=$info['images']?>/sim/n-error.png) no-repeat 15px center; 
border: 1px solid #dfb2b2; 
}
.message.success { 
color: #11a322;
background: #e8f6e9 url(<?=$info['images']?>/sim/n-success.png) no-repeat 15px center;
border: 1px solid #b2e1b7; 
}
.message.warning {
color: #c2b515; 
background: #f9f8e8 url(<?=$info['images']?>/sim/n-warning.png) no-repeat 15px center;
border: 1px solid #ebe7b3; 
}
.line {
border-bottom: solid 1px #C6D5E1;
margin: 0 0 30px 0;
padding: 0 0 0 0;
clear: both;
}
.box_column2 {
float: left; 
width: 47%; 
border: solid 1px #DDD;
background: #FFF;
padding: 4px 4px 10px 4px;
margin-bottom: 10px;
margin-right: 2%;
}
.box_column3 {
float: left; 
width: 30%;
border: solid 1px #DDD;
background: #FFF;
padding: 4px 4px 10px 4px;
margin-bottom: 10px;
margin-right: 2%;
}
.title_column {
background: url(<?=$info['images']?>/sim/n-bg_title_side2.jpg) top repeat-x;
text-shadow: 1px 1px #FFF;
font-weight: bold;
font-size: 11px;
padding: 3px 6px;
margin: 0 0 10px 0;
}
.bcf2 {
margin-right: 0;
}
.bcf3 {
margin-right: 0;
width: 31%;
}
.outer {
background: #ededed;
float: left;
margin: 0 2% 4% 0;
}
.outer img {
width: 100%;
height: 100%;
border: solid 0px;
}
.out_four {
width: 23%;
}
.out_five {
width: 18%;
}
.out_four .p_inner {
height: 187px;
}
.out_five .p_inner {
height: 141px;
}
.out_video {
width: 333px;
}
.middle { background: #d8d8d8; }
.inner { background: #A0A0A0; }
.inner p {
border-left: 1px solid #DDD;
border-top: 1px solid #DDD;
background-color: #fff;
background-position: center; 
background-repeat: no-repeat;
background-size:100% auto;
-webkit-background-size: 100% auto;
-o-background-size: 100% auto;
-khtml-background-size: 100% auto;
-moz-background-size: 100% auto;
margin: 0;
}
.middle, .inner, .p_inner {
position: relative;
left: -1px;
top: -1px;
}
.box_txt_outer {
background: #FFF; 
padding: 5px 0 0 0;
height: 90px;
font-size: 11px;
}
.box_outer_acoes {
border-bottom: solid 1px #CCC; 
padding: 5px 0 10px 0;
margin-bottom: 5px;
}

/* TOOLTIP */
#dhtmltooltip{
position: absolute;
left: -300px;
max-width: 200px;
border: 0px solid;
padding: 5px 10px;
background-color: #555;
visibility: hidden;
z-index: 100;
font-size: 11px;
color: #FFF;
}
#dhtmlpointer{
position:absolute;
left: -300px;
z-index: 101;
visibility: hidden;
}
/*****/

#box_feed {
float: left; 
width: 47%;
}

#box_feed h3 {
font-size: 12px;
color: #C00;
margin: 0 0 10px 0;
}

.box_post_feed {
border-top: solid 1px #DDD; 
padding: 15px 0;
font-size: 11px;
}

.box_post_feed p{
line-height: 18px;
}

.img_pdt_feed {
border: solid 1px #E5E5E5; 
padding: 2px; 
width: 120px; 
height: 92px;
margin: 8px 5px 8px 0;
float: left;
}

.date_feed {
color: #999;
clear: both;
margin-top:5px;
}

.box_editor {
width: 96%;
padding-top: 5px;
}

/* help do yav */
.innerError {
background-image: url(<?=$info['plugins']?>/yav/invalid.gif);
background-position: left top;
background-repeat: no-repeat;
background-color: white;
padding-left: 20px;
padding-top: 1px;
color: #FF8000;
margin-left: 5px;
}
.innerHelp {
background-image: url(<?=$info['plugins']?>/yav/valid.gif);
background-position: left top;
background-repeat: no-repeat;
background-color: white;
padding-left: 20px;
padding-top: 1px;
color: #008000;
margin-left: 5px;
}
/* help do yav */

.bx_top_busca {
padding-top: 10px;
text-align: right;
}

.busca_top {
width: 160px; 
border: 1px solid #CCC; 
padding:5px; 
background: #F9F9F9;
}

.input_list {
width: 40px;
border:1px solid #CCC;
padding:2px 4px;
font-size: 11px;
background: #F9F9F9;
color: #888;
}
.order_inp {
float: right;
position: relative;
top: -5px;
}

.info_tooltip {
float: right; 
margin-left: 5px; 
font-weight: bold;
}

.img_gerenciador {
margin-bottom: 5px;
width: 100%;
height: 187px;
background-position: center center;
background-repeat: no-repeat;
background-size:100% auto;
-webkit-background-size: 100% auto;
-o-background-size: 100% auto;
-khtml-background-size: 100% auto;
-moz-background-size: 100% auto;
}

.sub_title {
margin: 0 0 20px 0; 
font-size: 14px;
color: #C00;
}
.more_interacoes {
text-align: center; 
margin: 0 0 20px 0; 
padding: 5px 0; 
border-bottom: solid 1px #DDD; 
font-weight: bold;
}
.box_interacoes {
color: #665; 
font-size: 11px; 
background: #F3F3F3; 
margin: 5px 0; 
border-bottom: solid 2px #DDD; 
padding: 10px;
}

.box_produto_orcamento {
padding: 10px;
margin: 0 0 15px 0;
}
.box_produto_barra_top {
background: #F6F6F6; 
border-bottom: solid 1px #E5E5E5; 
padding: 10px 5px; 
float: left; 
width: 99%;
}
.column_qtd {
float: left; 
width: 28%; 
padding: 10px 10px 0 10px; 
margin-right: 2%; 
}
.column_qtd p {
padding: 5px 0;
}
.column_qtd input {
width: 70%;
}
.qtd1 {
border-left: solid 1px #FDCE11;
}
.qtd2 {
border-left: solid 1px #85CB38;
}
.qtd3 {
border-left: solid 1px #E26C0F;
}

.marcador {
color: #555;
background: #FFFFE1;
font-size: 10px;
}

.marcador a {
display: block;
padding: 0 3px;
}

.img-list {
width: 130px;
height: 100px;
border: solid 1px #E5E5E5;
padding: 1px;
}

.toolbarGlobal { position:relative; }
.toolbarGlobal li {list-style:none;}
.toolbarGlobal > ul > li {
list-style:none;
position: relative; 
}
.toolbarGlobal ul li ul {
padding: 8px 5px 2px 5px;
display:none;
width:auto;
min-width: 412px;
position:absolute; 
top:10px; 
right:0;
background:#FFF;
border: solid 1px #F5F5F5;
box-shadow: 2px 2px 3px rgba(0,0,0,0.2);
z-index:11;
text-align: right;
}
.toolbarGlobal li:hover ul {display:block;}
.toolbarGlobal ul li.parent ul li {display:inline;}

.icon_money {
position: relative;
float: left;
top: 5px;
}

.list_h {
margin: 0;
padding: 0;
list-style: none;
}

.list_h li {
border-bottom: solid 1px #EEE;
height: 245px;
margin-bottom: 20px;
}

.list_h li p {
padding: 7px 0;
}

.list_h .img_list_h {
width: 305px;
height: 220px;
float: left;
border: solid 1px #DDD;
background: #F7F7F7;
border-radius: 3px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
text-shadow: 0px 1px 0px rgba(255,255,255, 1);
margin-right: 15px;
}

.logo {
position: relative;
font-size: 11px;
}

.logo > span {
text-align: center;
-moz-box-shadow: 0 0 5px #ECECEC inset;
-webkit-box-shadow: 0 0 5px #ECECEC inset;
box-shadow:inset 0 0 5px #ECECEC;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
background: #FCFCFC;
border: 1px solid #DDD;
position: absolute;
left: 98%;
bottom: 30%;
visibility:hidden;
}

.logo > span:before {
z-index: 1;
}

.logo:hover > span {
visibility: visible;
opacity: 1;
}

.logo span a {
display: block;
text-decoration: none;
width: 120px;
padding: 6px;
}

.title_ext {
font-size: 20px;
font-weight: normal;
padding: 0 0 15px 0;
color: #888;
}

.box_ext {
float: left; 
width: 66%;
line-height: 22px;
}

.box_ext ul {
margin-left: 15px;
}

.icon_ext {
float: left; 
margin-right: 8px;
}

.info_ext {
font-size: 11px;
line-height: 22px;
}

.info_ext p {
border-left: dotted 1px #CCC; 
margin-right: 20px; 
border-right: dotted 1px #DDD; 
color: #888; 
padding: 2px 20px; 
font-size: 11px; 
float: left;
}

.box_ext_side {
border: dotted 1px #E0E0E0; 
float: right; 
width: 28%; 
padding: 1.50%;
}

.box_ext_side ul {
list-style: none;
}

.box_ext_side ul li {
padding: 15px 0;
font-size: 11px;
line-height: 21px;
border-top: dotted 1px #E0E0E0;;
height: 128px;
}

.box_ext_side ul li:hover {
background: #F9F9F9;
}

.box_ext_side li img {
float: left; 
margin-right: 8px;
border: none;
}

.list_ext_last {
height: 20px;
padding: 0;
height: 8px !important;
text-align: center;
font-weight: bold;
}

.list_ext_last:hover {
background: none !important;
}

.header-bar {
border-bottom: solid 1px #E8E8E8; 
padding: 0 15px; 
background: #F8F8F8; 
height: 28px;
}

.header-bar a:hover{
text-decoration: none;
}

.welcome-user {
background: url(images/avatar-icon.png) left no-repeat;
padding: 5px 5px 5px 25px !important;
}

.menu-top {
list-style: none;
}

.menu-top li {
float: left;
padding: 0 1px;
}

.menu-top li a {
display: block;
padding: 5px 10px 5px 15px;
}

.menu-top li a:hover {
background-color: #FEFEFE;
color: #000; 
}

.link-user {
background: url(images/users-icon.png) 10px 50% no-repeat;
padding-left: 40px !important;
}

.link-account {
background: url(images/account.png) 10px 50% no-repeat;
padding-left: 40px !important;
}

.link-plans {
background: url(images/plans.png) 10px 50% no-repeat;
padding-left: 40px !important;
}

.link-logout {
background: url(images/logout.png) 10px 50% no-repeat;
padding-left: 32px !important;
color: #C00;
}

.link-plugins {
background: url(images/extensoes.png) 10px 50% no-repeat;
padding-left: 33px !important;
}

.link-plugins {
color: #C14B30;
font-weight: bold;
}

.last-viewed {
background: url(images/last-viewed.png) 10px 50% no-repeat;
padding-left: 38px !important;
}

.last-viewed:hover {
background-color: #FEFEFE;
color: #000; 
}

.filters-top-right {
text-align: right; 
padding-top: 15px;
}

.toolbar_last_viewed { position:relative; }
.toolbar_last_viewed li {list-style:none;}
.toolbar_last_viewed > ul > li {
list-style:none;
position: relative; 
z-index:1000;
float: left;
}
.toolbar_last_viewed ul li ul {
padding: 10px 0 0 0;
display:none;
width:auto;
min-width:260px;
position:absolute; 
top: 28px; 
left:0;
background:#FFF;
border: solid 1px #F1F1F1;
box-shadow: 2px 2px 3px rgba(0,0,0,0.3);
}
.toolbar_last_viewed ul li ul li a { padding-left: 10px; padding-bottom: 7px; }
.toolbar_last_viewed ul li ul li a:hover { background: #F9F9F9; }
.toolbar_last_viewed li:hover ul {display:block;}
.toolbar_last_viewed li:hover ul li { width: 99.50%; border-bottom: dotted 1px #EEE; font-size: 11px; }
.icon-last_viewed {position: relative; top: 3px; margin-right: 3px;}

.bx-update {
border-bottom: solid 1px #E6DB55; 
font-size: 11px; 
padding: 5px; 
text-align: center; 
clear: both; 
background: #FFFBCC;
}

.plans-table{
margin: 0 auto;
top: 10px;
position: relative; 
width: 100%;
}

.plans-table td {
position: relative;
display: inline-block;
margin: 0 1.50%;
vertical-align: text-top;
}

.plans-table thead .plan td {
width: 27.90%;
height: 22px;
padding: 1.50% 1%;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}

.plans-table thead .plan h2 {
font-family: 'Arial Black', Arial, Helvetica, sans-serif;
font-weight: bold;
font-size: 22px;
text-transform: uppercase;
line-height: 24px;
}

.plans-table thead .plan .green {
color: #36611e;
text-shadow: 1px 1px 0px rgba(255,255,255, .2);
background: url(images/green_pattern.png) repeat-x 0 0;
}

.plans-table thead .plan .orange {
color: #fafafa;
text-shadow: 1px 1px 2px rgba(0,0,0, .4);
background: url(images/orange_pattern.png) repeat-x 0 0;
}

.plans-table thead .plan img {
float: right;
}

.plans-table thead .price td {
position: relative;
width: 29.90%;
padding: 1.50% 0%;
font-family: 'Arial Black', Arial, Helvetica, sans-serif;
font-weight: bold;
text-align: center;
color: #b6b07c;
}

.plans-table thead .price .orange { background: #FFF0D9; }
.plans-table thead .price .green { background: #ECF8E3; }

.plans-table thead .price p {
display: table;
margin: 0 auto;
font-size: 50px;
line-height: 60px;
}

.plans-table thead .price p span {
font-size: 0.5em;
display: table-cell;
vertical-align: middle;
}

.plans-table thead .price span { font-size: 14px; }

.plans-table thead .price a {
display: block;
position: absolute;
top: 41px;
right: -5px;
height: 32px;
padding: 0 10px;
line-height: 32px;
font-size: 12px;
text-decoration: none;
}

.plans-table tbody td {
width: 26.40%;
padding-left: 3.50%;
line-height: 30px;
border-top: 1px solid #f2f2f2;
color: #828282;
}

.plans-table tbody tr:first-child td { border-top: 20px solid #ffffff; }
.plans-table tbody tr:last-child td { border-bottom: 20px solid #ffffff; }
.plans-table .clock-icon td,
.plans-table .basket-icon td,
.plans-table .star-icon td,
.plans-table .smarty-icon td,
.plans-table .heart-icon td { background: #ffffff url(images/icons.png) no-repeat 0 0; }
.plans-table .clock-icon td { background-position: 0 0; }
.plans-table .basket-icon td { background-position: 0 -30px; }
.plans-table .star-icon td { background-position: 0 -60px; }
.plans-table .heart-icon td { background-position: 0 -90px; }
.plans-table .smarty-icon td { background-position: 0 -120px; }

.plans-table tbody td a { font-size: 11px; }

.plans-table tfoot td {
width: 27.90%;
padding: 2% 1%;
text-align: center;
line-height: 18px;
font-family: Helvetica, Arial, sans-serif;
font-size: 13px;
font-weight: bold;
color: #FFF;
text-shadow: 1px 1px 0px rgba(0,0,0, .2);
-webkit-border-radius: 0 0 2px 2px;
-moz-border-radius: 0 0 2px 2px;
border-radius: 0 0 2px 2px;
-webkit-box-shadow: 0px 2px 0px #e4e4e4;
-moz-box-shadow: 0px 2px 0px #e4e4e4;
box-shadow: 0px 2px 0px #e4e4e4;
}

.plans-table tfoot td a {
color:#FFF;
text-decoration: none;
display: block;
}

.plans-table tfoot .orange { background: #FB7331; }
.plans-table tfoot .green { background: #71C641; }

.title-pl {
font-size: 24px; 
font-weight: normal; 
color: #996600;
text-align: center;
}

.title-pl span {
padding: 5px 10px; 
background: #EEE; 
color: #fafafa; 
text-shadow: 1px 1px 2px rgba(0,0,0, .4); 
background: url(images/orange_pattern.png) repeat-x 0 0; 
-webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
border-radius: 5px;
}

.bx-confirm-pl {
border: solid 1px #EEE; 
padding: 15px; 
background: #F5F5F5; 
-webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
border-radius: 5px; 
text-align: center;
font-size: 15px;
width: 45%;
margin: 0 auto;
margin-bottom: 20px;
}

.bx-confirm-pl span {
padding: 5px 10px; 
background: #EEE; 
color: #fafafa; 
text-shadow: 1px 1px 2px rgba(0,0,0, .4); 
background: url(images/green_pattern.png) repeat-x 0 0;
-webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
border-radius: 5px;
}

.bx-confirm-pl span img {
position: relative;
top: 3px;
}

.bx-ext { list-style: none; }
.bx-ext li {
border-right: dotted 1px #CCC; 
float: left; 
width: 138px; 
text-align: center; 
padding: 0 35px;
margin-bottom: 30px;
font-size: 11px;
color: #777;
}

#columns {
-webkit-column-gap: 15px;
-moz-column-gap: 15px;
column-gap: 20px;
-webkit-column-fill: auto;
-moz-column-fill: auto;
column-fill: auto;
}

.columns3 {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
}

.columns4 {
-webkit-column-count: 4;
-moz-column-count: 4;
column-count: 4;
}

.pin {
display: inline-block;
background: #FEFEFE;
border: 2px solid #FAFAFA;
box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
margin: 0 2px 15px;
-webkit-column-break-inside: avoid;
-moz-column-break-inside: avoid;
column-break-inside: avoid;
padding: 5px 10px;
line-height: 20px;
}

.columns3 .pin { min-width: 92%; min-width: 97.50%\0/IE8+9; }
.columns4 .pin { min-width: 89%; min-width: 97.50%\0/IE8+9; }

.pin img {
width: 100%;
width: auto\0/IE8+9;
margin: 5px 0;
}

.pin ul, ol {
margin-left: 15px;
}

.pin h3 {
font-size: 14px;
color: #667;
border-bottom: solid 1px #D9D9D9;
margin-bottom: 10px;
padding-bottom: 4px;
font-family: Arial;
}