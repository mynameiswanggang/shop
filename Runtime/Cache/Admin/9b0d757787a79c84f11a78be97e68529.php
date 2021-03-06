<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title><?php echo ($title); ?></title>
<link href="<?php echo (ADMIN_CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/uniform.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/tables/datatable.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/ui/jquery.sourcerer.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.blockUI.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/calendar.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>custom.js"></script>

<!-- <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>charts/chart.js"></script> -->

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>message_cn.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>vue.js"></script>

<style>
em.error{
	color:red;
}
</style>

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="<?php echo (ADMIN_IMG_URL); ?>logo.png" alt="" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <!-- Search widget -->
    <form action="" class="sidebarSearch">
        <input type="text" name="search" placeholder="搜索..." id="ac" />
        <input type="submit" value="" />
    </form>
    
    <div class="sidebarSep"></div>

    <!-- General balance widget -->
    <div class="logo" style="height:auto;">
		<div class="widget" style="background: none;margin-top:0px; border:none;">
                    <div class="newOrder">
                        <div class="userRow">
                            <a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>user.png" alt="头像" class="floatL"></a>
                            <ul class="leftList">
                                <li><a href="#" title=""><strong><?php echo ($user["username"]); ?></strong></a></li>
                                <li>角色:<?php echo ($user["role"]); ?></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    
                        <div class="cLine"></div>
                        
                        <div class="orderRow">
                            <ul class="leftList">
                                <li>账号创建时间:</li>
                                <li>上次登陆时间:</li>
                                <li>上次登陆的IP：</li>
                                <li>邮箱：</li>
                                <li>登陆次数：</li>
                            </ul>
                            <ul class="rightList">
                                <li><strong><?php echo (date("Y/m/d",$user["create_time"])); ?></strong> |  <?php echo (date("H:i",$user["create_time"])); ?></li>
                                <li><strong><?php echo (date("Y/m/d",$user["login_time"])); ?></strong> |  <?php echo (date("H:i",$user["login_time"])); ?></li>
                                <li><strong class="orange"><?php echo ($user["login_ip"]); ?></strong></li>
                                <li><strong class="orange"><?php echo ($user["email"]); ?></strong></li>
                                <li><strong class="green"><?php echo ($user["login_count"]); ?></strong></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
    </div>
    
    <div class="sidebarSep"></div>
    
    <!-- 后台菜单 -->
	<?php echo W('My/menu');?>
</div>


<!-- Right side -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/home.png" alt="" />Dashboard</span>
            <ul class="smallDropdown">
                <li><a href="index.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    

<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5><?php echo ($pageTitle); ?></h5>
			<span><?php echo ($pageDesc); ?></span>
		</div>
		<div class="middleNav">
			<ul>
				<li class="mUser"><a href="#" title=""><span class="users"></span></a>
					<ul class="mSub1">
						<li><a href="#" title="">Add user</a></li>
						<li><a href="#" title="">Statistics</a></li>
						<li><a href="#" title="">Orders</a></li>
					</ul></li>
				<li class="mMessages"><a href="#" title=""><span
						class="messages"></span></a>
					<ul class="mSub2">
						<li><a href="#" title="">New tickets<span
								class="numberRight">8</span></a></li>
						<li><a href="#" title="">Pending tickets<span
								class="numberRight">12</span></a></li>
						<li><a href="#" title="">Closed tickets</a></li>
					</ul></li>
				<li class="mFiles"><a href="#" title="Or you can use a tooltip"
					class="tipN"><span class="files"></span></a></li>
				<li class="mOrders"><a href="#" title=""><span
						class="orders"></span><span class="numberMiddle">8</span></a>
					<ul class="mSub4">
						<li><a href="#" title="">Pending uploads</a></li>
						<li><a href="#" title="">Statistics</a></li>
						<li><a href="#" title="">Trash</a></li>
					</ul></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="line"></div>

<!-- Page statistics area -->
<div class="statsRow">
	<div class="wrapper">
		<div class="controlB">
			<ul>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/plus.png" alt="" /><span>Add
							new session</span></a></li>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/database.png"
						alt="" /><span>New DB entry</span></a></li>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/hire-me.png"
						alt="" /><span>Add new user</span></a></li>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/statistics.png"
						alt="" /><span>Check statistics</span></a></li>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/comment.png"
						alt="" /><span>Review comments</span></a></li>
				<li><a href="#" title=""><img
						src="<?php echo (ADMIN_IMG_URL); ?>icons/control/32/order-149.png"
						alt="" /><span>Check orders</span></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="line"></div>

<!-- Main content wrapper -->
<div id="userInfoList">
<div  class="wrapper">

	<!-- Dynamic table -->
	<div class="widget">
		<div class="title">
			<img src="<?php echo (ADMIN_IMG_URL); ?>icons/dark/full2.png" alt=""
				class="titleIcon" />
			<h6>管理员列表</h6>
		</div>
		<table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<th v-for="title in tableTitle">
					{{title}}
				</th>
			</tr>
            </thead>
            
            <tbody>
 				<tr v-for="user in userList">
 					<td>{{user.username}}</td>
 					<td>{{user.role}}</td>
 					<td>{{user.email}}</td>
 					<td>{{user.create_time}}</td>
 					<td>{{user.login_time}}</td>
 					<td>{{user.login_ip}}</td>
 					<td>
 						<div class="num">
 						<a name="{{user.id}}" v-on:click="changeStatus(user.id,user.status,$index)" href="javascript:;" class="blueNum">{{user.status==1?'开启':'禁用'}}</a>
 						</div>
 					</td>
 					<td>{{user.login_count}}</td>
 					<td>
 						<a href="javascript:;" v-on:click="assignRole(user)">编辑</a>
 						|
 						<a href="javascript:;" v-on:click="delUser(user.id,user.username)">删除</a>
 					</td>
 				</tr>
            </tbody>
            </table>
		<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
		<div class="dataTables_filter">
		<label>
		<span class="itemsPerPage">Search:</span> 
		<input v-model="search_condition" type="text" placeholder="type here...">
		<div v-on:click="search()" class="srch">
		</div>
		</label>
		</div>
		<div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers">
		<span v-if="nowpage!=1" v-on:click="page('first')" class="toFirst ui-corner-tl ui-corner-bl fg-button ui-button">First</span>
		<span v-if="nowpage!=1" v-on:click="page('prev')" class="previous fg-button ui-button">Prev</span>
		<span>
		<span v-if="nowpage>2" v-on:click="page('prevprev')" class="fg-button ui-button">{{nowpage-2}}</span>
		<span v-if="nowpage>1" v-on:click="page('prev')" class="fg-button ui-button">{{nowpage-1}}</span>
		<span class="fg-button ui-button ui-state-disabled">{{nowpage}}</span>
		<span v-if="(lastpage-nowpage)>0" v-on:click="page('next')" class="fg-button ui-button">{{parseInt(nowpage)+1}}</span>
		<span v-if="(lastpage-nowpage)>1" v-on:click="page('nextnext')" class="fg-button ui-button">{{parseInt(nowpage)+2}}</span>
		</span>
		<span v-if="nowpage<lastpage" v-on:click="page('next')" class="next fg-button ui-button">Next</span>
		<span v-if="nowpage<lastpage" v-on:click="page('last')" class="last ui-corner-tr ui-corner-br fg-button ui-button">Last</span>
		</div>
		</div>		
	</div>
</div>

<!-- 弹出层 -->
                <div id="userEdit" style="display:none;">
                    <div class="title"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/dark/list.png" alt="" class="titleIcon"><h6>用户信息编辑</h6></div>
					<div class="formRow">
                        <label>用户名：</label>
                        <div class="formRight">
                        <input v-model="curuser.username" type="text" readonly="readonly">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>密码:</label>
                        <div class="formRight">
                        <input v-model="curuser.password" name="password" type="password">
                        </div>
                        <div class="clear"></div>
                    </div>
                   <div class="formRow">
                        <label>邮箱:</label>
                        <div class="formRight"> 
                        <input v-model="curuser.email" name="email" type="text">
                        </div>
                        <div class="clear"></div>
                    </div> 
                   <div class="formRow">
                        <label>角色:</label>
                        <div class="formRight"> 					
                        <select v-model="curuser.rid" name="role">
                           <option v-for="role in roleList" value="{{role.id}}">{{role.name}}</option>
                     	</select>
                     	</div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
	                    <input type="button" v-on:click="esc()"  value="取消" class="blueB">
	                    <input type="button" v-on:click="saveNewUser()" value="保存" class="blueB">
                    </div>                                                         
                </div>
</div>

<!-- Footer line -->
<div id="footer">
	<div class="wrapper">
		As usually all rights reserved.More Templates <a
			href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
		- Collect from <a href="http://www.cssmoban.com/" title="网页模板"
			target="_blank">网页模板</a>
	</div>
</div>

</div>

<div class="clear"></div>
<script>

/*   $(function(){  */
		var userInfoList = new Vue({
	 		el:"#userInfoList",
	 		data:{
	 			tableTitle:<?php echo (json_encode($tableTitle )); ?>,
	 			userList:<?php echo (json_encode($userList )); ?>,
	 			search_condition:'',
	 			nowpage:'<?php echo ($nowpage); ?>',
	 			perpage:'<?php echo ($perpage); ?>',
	 			lastpage:'<?php echo ($lastpage); ?>',
	 			totalrecord:'<?php echo ($totalrecord); ?>',
	 			roleList:<?php echo (json_encode($roleList )); ?>,
	 			curuser:''
	 		},
	 		methods:{
	 			search:function(){ 				
	 				var url = "<?php echo U('Admin/user/user_list');?>";
	 				var search = {search:this.search_condition};
	 				$.post(url,search,function(json){
	 					userInfoList.userList = json.data;
	 					userInfoList.nowpage = json.nowPage;
	 					userInfoList.perpage = json.perPage;
	 					userInfoList.lastpage = json.lastPage;
	 					userInfoList.totalrecord = json.totalRecord;
	 				},'json');
	 			},
	 			page:function(pos){
	 				var url = "<?php echo U('Admin/user/user_list');?>";
	 				var data = '';
	 				switch(pos){
	 					case 'first':
	 						data = {nowPage:1,perPage:parseInt(this.perpage),search:this.search_condition};
	 						break;
	 					case 'prevprev':
	 						data = {nowPage:parseInt(this.nowpage)-2,perPage:this.perpage,search:this.search_condition};
	 						break;
	 					case 'prev':
	 						data = {nowPage:parseInt(this.nowpage)-1,perPage:this.perpage,search:this.search_condition};
	 						break;
	 					case 'next':
	 						data = {nowPage:parseInt(this.nowpage)+1,perPage:this.perpage,search:this.search_condition};
	 						break;
	 					case 'nextnext':
	 						data = {nowPage:parseInt(this.nowpage)+2,perPage:this.perpage,search:this.search_condition};
	 						break;
	 					case 'last':
	 						data = {nowPage:parseInt(this.lastpage),perPage:this.perpage,search:this.search_condtion};
	 						break;
	 					default:
	 						data = {nowPage:1,perPage:this.perpage,search:this.search_condition};
	 						break;
	 				}
	 				$.post(url,data,function(json){	 					
	 					userInfoList.userList = json.data;
	 					userInfoList.nowpage = json.nowPage;
	 					userInfoList.perpage = json.perPage;
	 					userInfoList.lastpage = json.lastPage;
	 					userInfoList.totalrecord = json.totalRecord;
	 				},'json');
	 			},
	 			changeStatus:function(id,status,index){
	 				var url = "<?php echo U('Admin/user/changeStatus');?>";
	 				$.post(url,{uid:id,status:status},function(json){
	 					if(json.res){
	 						userInfoList.userList[index].status = status?0:1;
	 					}
	 				},'json');
	 			},
	 			assignRole:function(user){
	 				user.password = '';
	 				this.curuser = user;
	 				$.blockUI({
	 					message:$('#userEdit'),
	 				    css: {
	 				        padding:        10,
	 				        margin:         10,
	 				        width:          '40%',
	 				        top:            '10%',
	 				        left:           '35%',
	 				        textAlign:      'center',
	 				        color:          '#000',
	 				        border:         '3px solid #aaa',
	 				        backgroundColor:'#fff',
	 				        cursor:         'wait'
	 				    },
	 				   focusInput: true	
	 					});
	 				
	 			},
	 			saveNewUser:function(){
	 				if(!confirm('你确定要修改吗？')){
	 					return;
	 				}
	 				var url = "<?php echo U('Admin/user/saveUser');?>";
	 				$.post(url,{user:this.curuser},function(json){
	 					if(json.res){
	 						alert('修改成功!');
	 						$.unblockUI();
	 						location.reload();
	 						
	 					}
	 				},'json');
	 			},
	 			esc:function(){
	 				$.unblockUI();
	 			},
	 			delUser:function(id,username){
	 				if(!confirm('确实要删除此用户吗？')){
	 					return;
	 				}
	 				var url = "<?php echo U('Admin/user/delUser');?>";
	 				$.post(url,{id:id,username:username},function(json){
	 					if(json.res){
	 						alert('删除成功!');
	 						location.reload();
	 						
	 					}
	 				},'json');
	 			}
	 		}
	 	}); 
		//console.log(userInfoList.userList);
/*   });	 */

  
  </script>
</body>
</html>