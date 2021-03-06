<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Crown - premium responsive admin template for backend systems</title>
<link href="<?php echo (ADMIN_CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/charts/excanvas.min.js"></script>
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

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/calendar.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>plugins/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>custom.js"></script>

<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>message_cn.js"></script>
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<style>
em.error{
	color:red;
}
</style>
<body class="nobg loginPage">
<script>
	$(function(){
		//验证手机号是否合法
		$.validator.addMethod('checkUsername',function(value,element){
			var pattern = /^\w{4,}$/;
			return this.optional(element) || (pattern.test(value));
		},"用户不合法");
		$.validator.addMethod('checkPassword',function(value,element){
			var pattern = /^\w{4,}$/;
			return this.optional(element) || (pattern.test(value));
		},"密码不合法");		
		$('form').validate({
			debug:true,
			rules:{
				username:{
					required:true,
					checkUsername:true
				},
				password:{
					required:true,
					checkPassword:true
				}
			},
			messages:{
				username:{
					required:"请输入用户名"
				},
				password:{
					required:"请输入密码"
				},
			},
	 		errorPlacement:function(error,element){
	 		   error.appendTo(element.parent());	
	 		},
	 		errorClass:'error',
	 		errorElement:'em',
	 		submitHandler:function(form){
	 			var url = "<?php echo U('Admin/Public/login');?>";
	 			$.post(url,$(form).serialize(),function(data){
	 				//console.log(data); return;
	 				if(data.res){
	 					//登陆成功，跳转到后台首页
	 					location.href = "<?php echo U('Admin/Admin/index');?>";
	 				}else{
	 					//登陆失败，错误信息显示
	 					alert(data.msg);
	 				}
	 			},'json');
	 		}
		});
	});
</script>
<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li><a href="/index.php/Homepage/index" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/mainWebsite.png" alt="" /><span>网站首页</span></a></li>
                <li><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/profile.png" alt="" /><span>联系管理员</span></a></li>
                <li><a href="#" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/messages.png" alt="" /><span>技术支持</span></a></li>
                <li><a href="login.html" title=""><img src="<?php echo (ADMIN_IMG_URL); ?>icons/topnav/settings.png" alt="" /><span>设置</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo"><img src="<?php echo (ADMIN_IMG_URL); ?>loginLogo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="<?php echo (ADMIN_IMG_URL); ?>icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
        <form  class="form">
            <fieldset>
                <div class="formRow">
                    <label for="login">用户名:</label>
                    <div class="loginInput"><input type="text" name="username" class="validate[required]" id="login" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">密码:</label>
                    <div class="loginInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <div class="rememberMe"><input type="checkbox" id="remMe" name="remMe" /><label for="remMe">Remember me</label></div>
                    <input type="submit" value="登陆" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>    

<!-- Footer line -->
<div id="footer">
    <div class="wrapper">As usually all rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
</div>


</body>
</html>