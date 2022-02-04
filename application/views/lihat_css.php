<style>

@charset "UTF-8";
table th
{
	padding:0px;
	margin:0px;
}

/* CSS Document */
.flexigrid {
	font-family:Arial,Helvetica,sans-serif;
	font-size:14px;
	position:relative;
	border:0px solid #eee;
	overflow:hidden;
	color:#000;
}
.flexigrid.crud-form
{
	overflow:visible;
}
.flexigrid .field-sorting
{
	cursor: pointer;
}
.flexigrid.hideBody {
	height:26px !important;
	border-bottom:1px solid #ccc;
}
.ie6fullwidthbug {
	border-right:0px solid #ccc;
	padding-right:2px;
}
.flexigrid div.nDiv {
	background:#eee url(images/line.gif) repeat-y -1px top;
	border:1px solid #ccc;
	border-top:0px;
	overflow:auto;
	left:0px;
	position:absolute;
	z-index:999;
	float:left;
}
.flexigrid div.nDiv table {
	margin:2px;
}
.flexigrid div.hDivBox {
	padding-right:40px;
}
.flexigrid div.bDiv table {
	margin-bottom:10px;
	width: 100%;
}
.flexigrid div.bDiv table.autoht {
	border-bottom:0px;
	margin-bottom:0px;
}
.flexigrid div.nDiv td {
	padding:2px 3px;
	border:1px solid #eee;
	cursor:default;
}
.flexigrid div.nDiv tr:hover td,.flexigrid div.nDiv tr.ndcolover td {
	background:#d5effc url(images/hl.png) repeat-x top;
	border:1px solid #a8d8eb;
}
.flexigrid div.nDiv td.ndcol1 {
	border-right:1px solid #ccc;
}
.flexigrid div.nDiv td.ndcol2 {
	border-left:1px solid #fff;
	padding-right:10px;
}
.flexigrid div.nDiv tr:hover td.ndcol1,.flexigrid div.nDiv tr.ndcolover td.ndcol1 {
	border-right:1px solid #d2e3ec;
}
.flexigrid div.nDiv tr:hover td.ndcol2,.flexigrid div.nDiv tr.ndcolover td.ndcol2 {
	border-left:1px solid #eef8ff;
}
.flexigrid div.nBtn {
	position:absolute;
	height:24px;
	width:14px;
	z-index:900;
	background:#fafafa url(images/fhbg.gif) repeat-x bottom;
	border:0px solid #ccc;
	border-left:1px solid #ccc;
	top:0px;
	left:0px;
	margin-top:1px;
	cursor:pointer;
	display:none;
}
.flexigrid div.nBtn div {
	height:24px;
	width:12px;
	border-left:1px solid #fff;
	float:left;
	background:url(images/ddn.png) no-repeat center;
}
.flexigrid div.nBtn.srtd {
	background:url(images/wbg.gif) repeat-x 0px -1px;
}
.flexigrid div.mDiv {
	background:url(images/wbg.gif) repeat-x top;
	border:1px solid #ccc;
	border-bottom:0px;
	border-top:0px;
	font-weight:bold;
	display:block;
	overflow:hidden;
	white-space:nowrap;
	position:relative;
}
.flexigrid div.mDiv div {
	padding:6px;
	white-space:nowrap;
}
.flexigrid div.mDiv div.ptogtitle {
	position:absolute;
	top:4px;
	right:3px;
	padding:0px;
	height:16px;
	width:16px;
	overflow:hidden;
	border:1px solid #ccc;
	cursor:pointer;
}
.flexigrid div.mDiv div.ptogtitle:hover {
	background-position:left -2px;
	border-color:#bbb;
}
.flexigrid div.mDiv div.ptogtitle span {
	display:block;
	border-left:1px solid #eee;
	border-top:1px solid #fff;
	border-bottom:1px solid #ddd;
	width:14px;
	height:14px;
	background:url(images/uup.png) no-repeat center;
}
.flexigrid div.mDiv div.ptogtitle.vsble span {
	background:url(images/ddn.png) no-repeat center;
}
.flexigrid div.tDiv /*toolbar*/ {
	background:#fafafa url(images/bg.gif) repeat-x top;
	position:relative;
	border:1px solid #ccc;
	border-bottom:0px;
	overflow:hidden;
}
.flexigrid div.tDiv2 {
	float:left;
	padding:1px;
}
.flexigrid div.tDiv3 {
	float:right;
	padding:1px;
}
.flexigrid div.sDiv /*toolbar*/ {
	background:#fafafa url(images/bg.gif) repeat-x top;
	position:relative;
	border:1px solid #ccc;
	border-top:0px;
	overflow:hidden;
}
.flexigrid div.sDiv2 {
	float:left;
	clear:both;
	padding:5px;
	padding-left:5px;
	width:604px;
}
.flexigrid div.sDiv2 input,.flexigrid div.sDiv2 select {
	vertical-align:middle;
}
.flexigrid.crud-form select
{
	min-width: 200px;
}
.flexigrid div.btnseparator {
	float:left;
	height:22px;
	border-left:1px solid #ccc;
	border-right:1px solid #fff;
	margin:1px;
}
.flexigrid div.fbutton {
	float:left;
	display:block;
	cursor:pointer;
	padding:1px;
}
.flexigrid div.fbutton div {
	float:left;
	padding:1px 3px;
}
.flexigrid div.fbutton span {
	float:left;
	display:block;
	padding:3px;
}
.flexigrid div.fbutton span.add {
	background:url(images/add.png) no-repeat;
	background-position: 0px 3px;
	padding-left: 20px;
}
.flexigrid div.fbutton span.export {
	background:url(images/export.png) no-repeat;
	background-position: 0px 3px;
	padding-left: 20px;
}
.flexigrid div.fbutton span.print {
	background:url(images/print.png) no-repeat;
	background-position: 0px 3px;
	padding-left: 20px;
}
.flexigrid div.fbutton span.delete {
	background:url(images/close.png) no-repeat;
	padding-left: 20px;
}
.flexigrid div.fbutton:hover,.flexigrid div.fbutton.fbOver {
	padding:0px;
	border:1px solid #ccc;
}
.flexigrid div.fbutton:hover div,.flexigrid div.fbutton.fbOver div {
	padding:0px 2px;
	border-left:1px solid #fff;
	border-top:1px solid #fff;
	border-right:1px solid #eee;
	border-bottom: 1px solid #eee;
}
/* end toolbar*/
.flexigrid div.hDiv table {
	border-right:1px solid #fff;
}
.flexigrid table tr.hDiv
{
	background:#fafafa url(images/fhbg.gif) repeat-x bottom;
	position:relative;
	border:1px solid #ccc;
	border-bottom:0px;
	overflow:hidden;
}
.flexigrid div.cDrag {
	float:left;
	position:absolute;
	z-index:2;
	overflow:visible;
}
.flexigrid div.cDrag div {
	float:left;
	background:none;
	display:block;
	position:absolute;
	height:24px;
	width:5px;
	cursor:col-resize;
}
.flexigrid div.cDrag div:hover,.flexigrid div.cDrag div.dragging {
	background:url(images/line.gif) repeat-y 2px center;
}
.flexigrid div.iDiv {
	border:1px solid #316ac5;
	position:absolute;
	overflow:visible;
	background:none;
}
.flexigrid div.iDiv input,.flexigrid div.iDiv select,.flexigrid div.iDiv textarea {
	font-family:Arial,Helvetica,sans-serif;
	font-size:11px;
}
.flexigrid div.iDiv input.tb {
	border:0px;
	padding:0px;
	width:100%;
	height:100%;
	padding:0px;
	background:none;
}
.flexigrid div.bDiv {
	border:1px solid #ccc;
	border-top:0px;
	background:#fff;
	overflow:auto;
	position:relative;
}
.flexigrid div.form-div {
	border:1px solid #ccc;
	border-top:0px;
	background:#fff;
	position:relative;
	font-size:15px;
	padding:0px 0px 10px 0px;
}
.flexigrid div.form-div select
{
	font-size: 15px;
	border: 1px solid #AAA;
	padding: 5px 5px 5px 5px;
	background: #fafafa;
}
.flexigrid div.form-div select option
{
	padding-right: 10px;
}
.flexigrid div.form-div input[type=text], .flexigrid div.form-div input[type=password]
{
	font-size: 15px;
	height:20px;
	border: 1px solid #AAA;
	padding: 5px 5px 5px 5px;
}
.flexigrid input[type=text].form-control {
	width: 500px;
}
.flexigrid div.form-div textarea
{
	font-size: 15px;
	border: 1px solid #AAA;
	padding: 5px 5px 5px 5px;
	background: #fafafa;
}

.flexigrid div.form-div textarea:hover,
.flexigrid div.form-div input[type=text]:hover,
.flexigrid div.form-div select:hover
{
	border: 1px solid #555;
	background: #fff;
}
.flexigrid div.form-div textarea:focus, .flexigrid div.form-div input[type=text]:focus, .flexigrid div.form-div select:focus
{
	border: 1px solid #444;
}
div.form-div input.datepicker-input
{
	width: 100px !important;
}
div.form-div input.datetime-input
{
	width:150px !important;
}
.form-field-box
{
	padding: 5px 10px;
	margin: 0px 0px 5px 0px;
	min-height: 30px;
}
.form-field-box.odd
{
	background: #fff;
}
.form-field-box.even
{
	background: #EFEFEF;
}
.form-display-as-box
{
	float:left;
	width:200px;
	padding-top:7px;
}
.form-input-box
{
	float:left;
}
.flexigrid div.form-button-box {
	float:left;
	margin-top:11px;
	margin-left:10px;
}
.flexigrid div.bDiv table {
	border-bottom:1px solid #ccc;
}
.flexigrid div.hGrip {
	position:absolute;
	top:0px;
	right:0px;
	height:5px;
	width:5px;
	background:url(images/line.gif) repeat-x center;
	margin-right:1px;
	cursor:col-resize;
}
.flexigrid div.hGrip:hover,.flexigrid div.hGrip.hgOver {
	border-right:1px solid #999;
	margin-right:0px;
}
.flexigrid div.vGrip {
	height:5px;
	overflow:hidden;
	position:relative;
	background:#fafafa url(images/wbg.gif) repeat-x 0px -1px;
	border:1px solid #ccc;
	border-top:0px;
	text-align:center;
	cursor:row-resize;
}
.flexigrid div.vGrip span {
	display:block;
	margin:1px auto;
	width:20px;
	height:1px;
	overflow:hidden;
	border-top:1px solid #aaa;
	border-bottom:1px solid #aaa;
	background:none;
}
.flexigrid table tr.hDiv th,.flexigrid div.bDiv td /* common cell properties*/ {
	text-align:left;
	border-right:1px solid #ddd;
	border-left:1px solid #fff;
	overflow:hidden;
	vertical-align:top !important;
}
.flexigrid table tr.hDiv th div,.flexigrid div.bDiv td div,div.colCopy div/* common inner cell properties*/ {
	padding:5px;
	border-left:0px solid #fff;
}
.flexigrid div.hDiv th,div.colCopy {
	font-weight:normal;
	height:24px;
	cursor:default;
	white-space:nowrap;
	overflow:hidden;
}
div.colCopy {
	font-family:Arial,Helvetica,sans-serif;
	font-size:11px;
	background:#fafafa url(images/fhbg.gif) repeat-x bottom;
	border:1px solid #ccc;
	border-bottom:0px;
	overflow:hidden;
}
.flexigrid div.hDiv th.sorted {
	background:url(images/wbg.gif) repeat-x 0px -1px;
	border-bottom:0px solid #ccc;
}
.flexigrid div.hDiv th.thOver {
}
.flexigrid div.hDiv th.thOver div,.flexigrid div.hDiv th.sorted.thOver div {
	border-bottom:1px solid orange;
	padding-bottom:4px;
}
.flexigrid div.hDiv th.sorted div {
	border-bottom:0px solid #ccc;
	padding-bottom:5px;
}
.flexigrid div.hDiv th.thMove {
	background:#fff;
	color:#fff;
}
.flexigrid div.hDiv th.sorted.thMove div {
	border-bottom:1px solid #fff;
	padding-bottom:4px
}
.flexigrid div.hDiv th.thMove div {
	background:#fff !important;
}
.flexigrid table tr.hDiv th div.desc {
	background:url(images/dn.png) no-repeat center top;
}
.flexigrid table tr.hDiv th div.asc {
	background:url(images/up.png) no-repeat center top;
}
.flexigrid div.bDiv td {
	border-bottom:1px solid #fff;
	vertical-align:top;
	white-space:nowrap;
}
.flexigrid div.hDiv th div {
	overflow:hidden;
}
.flexigrid span.cdropleft {
	display:block;
	background:url(images/prev.gif) no-repeat -4px center;
	width:24px;
	height:24px;
	position:relative;
	top:-24px;
	margin-bottom:-24px;
	z-index:3;
}
.flexigrid div.hDiv span.cdropright {
	display:block;
	background:url(images/next.gif) no-repeat 12px center;
	width:24px;
	height:24px;
	float:right;
	position:relative;
	top:-24px;
	margin-bottom:-24px;
}
.flexigrid div.bDiv td div {
	border-top:0px solid #fff;
	padding-bottom:4px;
}
.flexigrid tr td.sorted {
	background:#f3f3f3;
	border-right:1px solid #ddd;
	border-bottom:1px solid #f3f3f3;
}
.flexigrid tr td.sorted div {
}
.flexigrid tr.erow td {
	background:#f7f7f7;
	border-bottom:1px solid #f7f7f7;
}
.flexigrid tr.erow td.sorted {
	background:#e3e3e3;
	border-bottom:1px solid #e3e3e3;
}
.flexigrid tr.erow td.sorted div {
}
.flexigrid div.bDiv tr:hover td,.flexigrid div.bDiv tr:hover td.sorted,.flexigrid div.bDiv tr.trOver td.sorted,.flexigrid div.bDiv tr.trOver td {
	background:#d9ebf5;
	border-left:1px solid #eef8ff;
	border-bottom:1px dotted #a8d8eb;
}
.flexigrid div.bDiv tr.trSelected:hover td,.flexigrid div.bDiv tr.trSelected:hover td.sorted,.flexigrid div.bDiv tr.trOver.trSelected td.sorted,.flexigrid div.bDiv tr.trOver.trSelected td,.flexigrid tr.trSelected td.sorted,.flexigrid tr.trSelected td {
	background:#d5effc url(images/hl.png) repeat-x top;
	border-right:1px solid #d2e3ec;
	border-left:1px solid #eef8ff;
	border-bottom: 1px solid #a8d8eb;
}
/* novstripe adjustments */
.flexigrid.novstripe .bDiv table {
	border-bottom:1px solid #ccc;
	border-right:1px solid #ccc;
}
.flexigrid.novstripe div.bDiv td {
	border-right-color:#fff;
}
.flexigrid.novstripe div.bDiv tr.erow td.sorted {
	border-right-color:#e3e3e3;
}
.flexigrid.novstripe div.bDiv tr td.sorted {
	border-right-color:#f3f3f3;
}
.flexigrid.novstripe div.bDiv tr.erow td {
	border-right-color:#f7f7f7;
	border-left-color:#f7f7f7;
}
.flexigrid.novstripe div.bDiv tr.trSelected:hover td,.flexigrid.novstripe div.bDiv tr.trSelected:hover td.sorted,.flexigrid.novstripe div.bDiv tr.trOver.trSelected td.sorted,.flexigrid.novstripe div.bDiv tr.trOver.trSelected td,.flexigrid.novstripe tr.trSelected td.sorted,.flexigrid.novstripe tr.trSelected td {
	border-right:1px solid #0066FF;
	border-left:1px solid #0066FF;
}
.flexigrid.novstripe div.bDiv tr.trOver td,.flexigrid.novstripe div.bDiv tr:hover td {
	border-left-color:#d9ebf5;
	border-right-color: #d9ebf5;
}
/* end novstripe */
.flexigrid div.pDiv {
	background:url(images/wbg.gif) repeat-x 0 -1px;
	border:1px solid #ccc;
	border-top:0px;
	overflow:hidden;
	white-space:nowrap;
	position:relative;
}
.flexigrid div.pDiv div.pDiv2 {
	margin:3px;
	margin-left:-2px;
	float:left;
	width:1024px;
}
div.pGroup {
	float:left;
	background:none;
	height:24px;
	margin:0px 5px;
}
.flexigrid div.pDiv .pPageStat,.flexigrid div.pDiv .pcontrol {
	position:relative;
	top:5px;
	overflow:visible;
}
.flexigrid div.pDiv input, .flexigrid div.pDiv select {
	vertical-align:text-top;
	position:relative;
	top:-5px;
}
.flexigrid div.pDiv input{
	top:-5px;
}
.flexigrid div.pDiv select {
	top:-3px;
}
.flexigrid div.pDiv div.pButton {
	float:left;
	width:22px;
	height:22px;
	border:0px;
	cursor:pointer;
	overflow:hidden;
}
.flexigrid div.pDiv div.pButton:hover,.flexigrid div.pDiv div.pButton.pBtnOver {
	width:20px;
	height:20px;
	border:1px solid #ccc;
	cursor:pointer;
}
.flexigrid div.pDiv div.pButton span {
	width:20px;
	height:20px;
	display:block;
	float:left;
}
.flexigrid div.pDiv div.pButton:hover span,.flexigrid div.pDiv div.pButton.pBtnOver span {
	width:19px;
	height:19px;
	border-top:1px solid #fff;
	border-left:1px solid #fff;
}
.flexigrid .pSearch {
	background:url(images/magnifier.png) no-repeat center;
}
.flexigrid .pFirst {
	background:url(images/first.gif) no-repeat center;
}
.flexigrid .pPrev {
	background:url(images/prev.gif) no-repeat center;
}
.flexigrid .pNext {
	background:url(images/next.gif) no-repeat center;
}
.flexigrid .pLast {
	background:url(images/last.gif) no-repeat center;
}
.flexigrid .pReload {
	background:url(images/load.png) no-repeat center;
}
.flexigrid .pReload.loading,.flexigrid .fbutton.loading{
	background:url(images/load.gif) no-repeat center;
}
.flexigrid .simple-loading{
	background:url(images/load.gif) no-repeat center;
	display:block;
	float:left;
	width: 16px;
	height: 16px;
}
.flexigrid .search-div-clear-button
{
	float:right;
	padding:5px;
}
.flexigrid .edit-icon
{
	background:url(images/edit.png) no-repeat;
	cursor: pointer;
	width: 16px;
	height:16px;
	float:right;
	border: none !important;
	padding:0px !important;
	padding-bottom:0px !important;
	margin-left:5px;
	display: block;
}
.flexigrid .clone-icon
{
	background:url(images/clone.png) no-repeat;
	cursor: pointer;
	width: 16px;
	height:16px;
	float:right;
	border: none !important;
	padding:0px !important;
	padding-bottom:0px !important;
	margin-left:5px;
	display: block;
}
.flexigrid .delete-icon
{
	background:url(images/close.png) no-repeat;
	cursor: pointer;
	width: 16px;
	height:16px;
	float:right;
	border: none !important;
	padding:0px !important;
	padding-bottom:0px !important;
	margin-left:5px;
	display: block;
}
.flexigrid .read-icon
{
	background:url(images/magnifier.png) no-repeat center;
	cursor: pointer;
	width: 16px;
	height:16px;
	float:right;
	border: none !important;
	padding:0px !important;
	padding-bottom:0px !important;
	margin-left:5px;
	display: block;
}
.flexigrid .tools
{
	white-space: nowrap;
	padding:0px;
	padding:5px 5px 3px 5px;
}

/* Some extras */

.text-center
{
	text-align: center;
}
.text-left
{
	text-align: left;
}
.text-right
{
	text-align: right;
}
.add-anchor, .delete-anchor, .export-anchor, .print-anchor
{
	color: #000;
}
.floatL
{
	float:left;
}
.floatR
{
	float:right;
}
.clear
{
	clear: both !important;
	border: none !important;
	padding: 0px !important;
	margin: 0px !important;
	height:0px;
	width:0px;
}
.flexigrid a img
{
	border: none;
}
.flexigrid textarea
{
	width:500px;
	height: 80px;
}
/* ie adjustments */
.flexigrid.ie div.hDiv th div,.flexigrid.ie div.bDiv td div,div.colCopy.ie div/* common inner cell properties*/ {
	overflow: hidden;
}
.report-div
{
	padding: 10px;
	border-style: solid;
	border-width: 1px;
	margin-bottom: 10px;
	margin-top: 10px;
	display:none;
	font-family: Arial,Helvetica,sans-serif;
}
.report-div.success
{
	border-color: green;
}
.report-div.success p
{
	background: url(images/success.png) no-repeat left center;
	margin: 0px !important;
	padding: 10px 0px 10px 25px !important;
}
.report-div.error
{
	border-color: red;
}
.report-div.error p
{
	background: url(images/error.png) no-repeat left center;
	margin: 0px !important;
	padding: 10px 0px 10px 25px !important;
}
input.field_error
{
	border: 1px solid red !important;
}
.flexigrid  .ftitle-left
{
	float: left;
	margin:0px !important;
	padding: 0px !important;
}
.flexigrid  .ftitle-right
{
	float: right;
	margin:0px;
	padding:0px 25px 0px 0px !important;
}
div.flexigrid .ftitle a
{
	color: blue;
	text-decoration: none;
}
div.flexigrid .ftitle a:hover
{
	text-decoration: underline;
}
div.flexigrid a
{
	color: blue;
	text-decoration: none;
}
div.flexigrid a:hover
{
	text-decoration: underline;
}
.small-loading
{
	background: url('images/load.gif') no-repeat;
	width:16px;
	height:15px;
	padding-left:25px;
	padding-top:1px;
	display: none;
}
.crud-action
{
	float:right;
	margin-left:5px;
	padding:0px;
	margin-right: 3px;
}
.readonly_label
{
	padding-top:7px;
}
ul.chzn-choices li.search-field input
{
	box-shadow: none !important;
}
#crudForm .pDiv
{
	background: #FFF !important;
	padding-top:10px;
	padding-bottom:10px;
	border-radius: 0px 0px 5px 5px;
}
textarea.texteditor, textarea.mini-texteditor
{
	width:750px;
	height: 200px;
}
.flexigrid div.form-div{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;color: #444;}
.flexigrid div.form-div input[type=text],.flexigrid div.form-div textarea,.flexigrid div.form-div select{display:inline-block;line-height:18px;color:#444;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.flexigrid div.form-div input[type=text],.flexigrid div.form-div select,.flexigrid div.form-div textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle;}
.flexigrid div.form-div input[type=text]{line-height:normal;*overflow:visible;}
.flexigrid div.form-div input[type=text],.flexigrid div.form-div select,.flexigrid div.form-div textarea{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;line-height:normal;}
.flexigrid div.form-div input[type=text],.flexigrid div.form-div textarea{-webkit-transition:border linear 0.2s,box-shadow linear 0.2s;-moz-transition:border linear 0.2s,box-shadow linear 0.2s;-ms-transition:border linear 0.2s,box-shadow linear 0.2s;-o-transition:border linear 0.2s,box-shadow linear 0.2s;transition:border linear 0.2s,box-shadow linear 0.2s;-webkit-box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1);-moz-box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1);box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1);}
.flexigrid div.form-div input[type=text]:focus,.flexigrid div.form-div textarea:focus{outline:0;border-color:rgba(82, 168, 236, 0.8);-webkit-box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1),0 0 8px rgba(82, 168, 236, 0.6);-moz-box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1),0 0 8px rgba(82, 168, 236, 0.6);box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.1),0 0 8px rgba(82, 168, 236, 0.6);}

/* Some beautiful twitter bootstrap buttons */
.flexigrid .btn {
  display: inline-block;
  *display: inline;
  padding: 4px 10px 4px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 13px;
  line-height: 18px;
  *line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.flexigrid .btn:hover,
.flexigrid .btn:active,
.flexigrid .btn.active,
.flexigrid .btn.disabled,
.flexigrid .btn[disabled] {
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
}

.flexigrid .btn:active,
.flexigrid .btn.active {
	background-color: #cccccc \9;
}

.flexigrid .btn:first-child {
	*margin-left: 0;
}

.flexigrid .btn:hover {
	color: #333333;
	text-decoration: none;
	background-color: #e6e6e6;
	*background-color: #d9d9d9;
	/* Buttons in IE7 don't get borders, so darken on hover */

	background-position: 0 -15px;
	-webkit-transition: background-position 0.1s linear;
	-moz-transition: background-position 0.1s linear;
	-ms-transition: background-position 0.1s linear;
	-o-transition: background-position 0.1s linear;
	transition: background-position 0.1s linear;
}

.flexigrid .btn:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}

.flexigrid .btn.active,
.flexigrid .btn:active {
	background-color: #e6e6e6;
	background-color: #d9d9d9 \9;
	background-image: none;
	outline: 0;
	-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.flexigrid .btn.disabled,
.flexigrid .btn[disabled] {
	cursor: default;
	background-color: #e6e6e6;
	background-image: none;
	opacity: 0.65;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.flexigrid .btn-large {
	padding: 9px 14px;
	font-size: 15px;
	line-height: normal;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.flexigrid .btn-large [class^="icon-"] {
	margin-top: 1px;
}

.flexigrid .btn-small {
	padding: 5px 9px;
	font-size: 11px;
	line-height: 16px;
}

.flexigrid .btn-small [class^="icon-"] {
	margin-top: -1px;
}

.flexigrid .btn-mini {
	padding: 2px 6px;
	font-size: 11px;
	line-height: 14px;
}

.flexigrid .btn-primary,
.flexigrid .btn-primary:hover,
.flexigrid .btn-warning,
.flexigrid .btn-warning:hover,
.flexigrid .btn-danger,
.flexigrid .btn-danger:hover,
.flexigrid .btn-success,
.flexigrid .btn-success:hover,
.flexigrid .btn-info,
.flexigrid .btn-info:hover,
.flexigrid .btn-inverse,
.flexigrid .btn-inverse:hover {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.flexigrid .btn-primary.active,
.flexigrid .btn-warning.active,
.flexigrid .btn-danger.active,
.flexigrid .btn-success.active,
.flexigrid .btn-info.active,
.flexigrid .btn-inverse.active {
	color: rgba(255, 255, 255, 0.75);
}

.flexigrid .btn {
	border-color: #ccc;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.flexigrid .btn-primary {
	background-color: #0074cc;
	*background-color: #0055cc;
	background-image: -ms-linear-gradient(top, #0088cc, #0055cc);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0055cc));
	background-image: -webkit-linear-gradient(top, #0088cc, #0055cc);
	background-image: -o-linear-gradient(top, #0088cc, #0055cc);
	background-image: -moz-linear-gradient(top, #0088cc, #0055cc);
	background-image: linear-gradient(top, #0088cc, #0055cc);
	background-repeat: repeat-x;
	border-color: #0055cc #0055cc #003580;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#0088cc', endColorstr='#0055cc', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-primary:hover,
.flexigrid .btn-primary:active,
.flexigrid .btn-primary.active,
.flexigrid .btn-primary.disabled,
.flexigrid .btn-primary[disabled] {
	background-color: #0055cc;
	*background-color: #004ab3;
}

.flexigrid .btn-primary:active,
.flexigrid .btn-primary.active {
	background-color: #004099 \9;
}

.flexigrid .btn-warning {
	background-color: #faa732;
	*background-color: #f89406;
	background-image: -ms-linear-gradient(top, #fbb450, #f89406);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
	background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
	background-image: -o-linear-gradient(top, #fbb450, #f89406);
	background-image: -moz-linear-gradient(top, #fbb450, #f89406);
	background-image: linear-gradient(top, #fbb450, #f89406);
	background-repeat: repeat-x;
	border-color: #f89406 #f89406 #ad6704;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89406', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-warning:hover,
.flexigrid .btn-warning:active,
.flexigrid .btn-warning.active,
.flexigrid .btn-warning.disabled,
.flexigrid .btn-warning[disabled] {
	background-color: #f89406;
	*background-color: #df8505;
}

.flexigrid .btn-warning:active,
.flexigrid .btn-warning.active {
	background-color: #c67605 \9;
}

.flexigrid .btn-danger {
	background-color: #da4f49;
	*background-color: #bd362f;
	background-image: -ms-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
	background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: linear-gradient(top, #ee5f5b, #bd362f);
	background-repeat: repeat-x;
	border-color: #bd362f #bd362f #802420;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#bd362f', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-danger:hover,
.flexigrid .btn-danger:active,
.flexigrid .btn-danger.active,
.flexigrid .btn-danger.disabled,
.flexigrid .btn-danger[disabled] {
	background-color: #bd362f;
	*background-color: #a9302a;
}

.flexigrid .btn-danger:active,
.flexigrid .btn-danger.active {
	background-color: #942a25 \9;
}

.flexigrid .btn-success {
	background-color: #5bb75b;
	*background-color: #51a351;
	background-image: -ms-linear-gradient(top, #62c462, #51a351);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
	background-image: -webkit-linear-gradient(top, #62c462, #51a351);
	background-image: -o-linear-gradient(top, #62c462, #51a351);
	background-image: -moz-linear-gradient(top, #62c462, #51a351);
	background-image: linear-gradient(top, #62c462, #51a351);
	background-repeat: repeat-x;
	border-color: #51a351 #51a351 #387038;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#62c462', endColorstr='#51a351', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-success:hover,
.flexigrid .btn-success:active,
.flexigrid .btn-success.active,
.flexigrid .btn-success.disabled,
.flexigrid .btn-success[disabled] {
	background-color: #51a351;
	*background-color: #499249;
}

.flexigrid .btn-success:active,
.flexigrid .btn-success.active {
	background-color: #408140 \9;
}

.flexigrid .btn-info {
	background-color: #49afcd;
	*background-color: #2f96b4;
	background-image: -ms-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
	background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: linear-gradient(top, #5bc0de, #2f96b4);
	background-repeat: repeat-x;
	border-color: #2f96b4 #2f96b4 #1f6377;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#5bc0de', endColorstr='#2f96b4', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-info:hover,
.flexigrid .btn-info:active,
.flexigrid .btn-info.active,
.flexigrid .btn-info.disabled,
.flexigrid .btn-info[disabled] {
	background-color: #2f96b4;
	*background-color: #2a85a0;
}

.flexigrid .btn-info:active,
.flexigrid .btn-info.active {
	background-color: #24748c \9;
}

.flexigrid .btn-inverse {
	background-color: #414141;
	*background-color: #222222;
	background-image: -ms-linear-gradient(top, #555555, #222222);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#555555), to(#222222));
	background-image: -webkit-linear-gradient(top, #555555, #222222);
	background-image: -o-linear-gradient(top, #555555, #222222);
	background-image: -moz-linear-gradient(top, #555555, #222222);
	background-image: linear-gradient(top, #555555, #222222);
	background-repeat: repeat-x;
	border-color: #222222 #222222 #000000;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#555555', endColorstr='#222222', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.flexigrid .btn-inverse:hover,
.flexigrid .btn-inverse:active,
.flexigrid .btn-inverse.active,
.flexigrid .btn-inverse.disabled,
.flexigrid .btn-inverse[disabled] {
	background-color: #222222;
	*background-color: #151515;
}

.flexigrid .btn-inverse:active,
.flexigrid .btn-inverse.active {
	background-color: #080808 \9;
}

button.btn,
input[type="submit"].btn {
  *padding-top: 2px;
  *padding-bottom: 2px;
}

button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}

button.btn.btn-large,
input[type="submit"].btn.btn-large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}

button.btn.btn-small,
input[type="submit"].btn.btn-small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}

button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
  *padding-top: 1px;
  *padding-bottom: 1px;
}

.btn-group {
  position: relative;
  *margin-left: .3em;
  *zoom: 1;
}

.btn-group:before,
.btn-group:after {
  display: table;
  content: "";
}

.btn-group:after {
  clear: both;
}

.btn-group:first-child {
  *margin-left: 0;
}

.btn-group + .btn-group {
  margin-left: 5px;
}

.btn-toolbar {
  margin-top: 9px;
  margin-bottom: 9px;
}

.btn-toolbar .btn-group {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}

.btn-group > .btn {
  position: relative;
  float: left;
  margin-left: -1px;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

.btn-group > .btn:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -moz-border-radius-topleft: 4px;
}

.btn-group > .btn:last-child,
.btn-group > .dropdown-toggle {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-bottomright: 4px;
}

.btn-group > .btn.large:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 6px;
          border-bottom-left-radius: 6px;
  -webkit-border-top-left-radius: 6px;
          border-top-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  -moz-border-radius-topleft: 6px;
}

.btn-group > .btn.large:last-child,
.btn-group > .large.dropdown-toggle {
  -webkit-border-top-right-radius: 6px;
          border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
          border-bottom-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-bottomright: 6px;
}

.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active {
  z-index: 2;
}

.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}

.btn-group > .dropdown-toggle {
  *padding-top: 4px;
  padding-right: 8px;
  *padding-bottom: 4px;
  padding-left: 8px;
  -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-group > .btn-mini.dropdown-toggle {
  padding-right: 5px;
  padding-left: 5px;
}

.btn-group > .btn-small.dropdown-toggle {
  *padding-top: 4px;
  *padding-bottom: 4px;
}

.btn-group > .btn-large.dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}

.btn-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-group.open .btn.dropdown-toggle {
  background-color: #e6e6e6;
}

.btn-group.open .btn-primary.dropdown-toggle {
  background-color: #0055cc;
}

.btn-group.open .btn-warning.dropdown-toggle {
  background-color: #f89406;
}

.btn-group.open .btn-danger.dropdown-toggle {
  background-color: #bd362f;
}

.btn-group.open .btn-success.dropdown-toggle {
  background-color: #51a351;
}

.btn-group.open .btn-info.dropdown-toggle {
  background-color: #2f96b4;
}

.btn-group.open .btn-inverse.dropdown-toggle {
  background-color: #222222;
}

.btn .caret {
  margin-top: 7px;
  margin-left: 0;
}

.btn:hover .caret,
.open.btn-group .caret {
  opacity: 1;
  filter: alpha(opacity=100);
}

.btn-mini .caret {
  margin-top: 5px;
}

.btn-small .caret {
  margin-top: 6px;
}

.btn-large .caret {
  margin-top: 6px;
  border-top-width: 5px;
  border-right-width: 5px;
  border-left-width: 5px;
}

.dropup .btn-large .caret {
  border-top: 0;
  border-bottom: 5px solid #000000;
}

.btn-primary .caret,
.btn-warning .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  opacity: 0.75;
  filter: alpha(opacity=75);
}

/* End of twitter bootstrap buttons */

.pretty-radio-buttons
{
	margin-top: 6px;
}

.pretty-radio-buttons label
{
	margin-right: 10px;
}
.ui-widget
{
	font-size: 12px !important;
}


/** Common CSS */
.loading-opacity
{
	opacity: 0.5;
    pointer-events: none;
    cursor: default;
}

.loading-opacity:before {
	font-size: 26px;
	position:absolute;
	color: #000;
	content: "Loading...";
	margin-left: 550px;
	z-index: 1000;
}


</style>
