<?php
/*

˵�� �� index_pages/index.inc.php �ļ�

======================================================
todo: 

����index_pagesҳ���ļ������д����ݴ���
css�޸ĳɷ���ı���ɫ��
xhtml��֤
css ��֤
��������
telnet�̵̳�����
fterm cterm���ص�����
��վ����ʾ���͡��Ƽ����ӡ��Լ�����Ҫ����ҳ����ʾ������

����wFroumѡ����
���������Զ�����ѡ����뾭��web��wForum�İ���

��һ��ģ�黯���淶���������ɷ����л�themes

 ----------- by laolin(http://www.laolin.com)
*/

$index_pages='index_pages/';


require("www2-funcs.php");
require($index_pages."index.inc.php");

function link_board($eng,$chs)
{
  global $index_pages;
  $burl='frames.html?mainurl=/bbsdoc.php?board=';
  echo "<h2 class='dotmark'>";
  echo "<a href=\"{$burl}$eng\" onclick=\"return goboard('$eng');\">$chs</a></h2> ";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
<head>
<title>ͬ�ô�ѧBBS��ͬ�۹���վ Tongji BBS Welcome to  bbs.tongji.edu.cn</title>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<meta name="author" content="����(http://www.laolin.com)" />
<link href="<?php echo $index_pages ?>index-3.css" type="text/css" rel="stylesheet" />
<!--script src="index-3.js" type="text/javascript"></script-->
<script type="text/javascript">


function guestlogin()
{
document.form1.id.value="guest";
document.form1.submit();
}
function register()
{
top.location.href="bbsreg0.html";
}
        
function dosubmit(o)
{
//TODO:����wForumѡ��
    return true;
}
function goboard()
{
 //TODO:����wForumѡ��
}
</script>
<?php if(isset($extra_head)) echo $extra_head; ?>
</head>
<body  onload="document.form1.id.focus()">
<div id="wrapper">
  <div id="container">
  	
     <div id="mainimage">
     <?php 
     if(isset($link_to) && $link_to!='')
       $urlto=$link_to;
     else
       $urlto='/frames.html?mainurl=/bbsdoc.php?board='.$link_board;
       ?>
       <a href="<?php echo $urlto;?>"><img src="<?php echo $img_src; ?>" alt="<?php echo $link_board;?> board" /></a>
     </div><!-- mainimage -->
     
     <div>
     </div>
     
     <div id="mainform">

 	<form id="form1" name="form1" action="/bbslogin.php" method="post"
 	 onsubmit="return dosubmit(this)">
	  �û�����<input type="text" name="id" id="id" class="u"
	  onmouseover="this.focus()" onfocus="this.select()" 
	  onkeydown="if(event.keyCode==13)event.keyCode=9" />
	  ���룺<input type="password" name="passwd" id="passwd" class="p"  
	   maxlength="39" />
    <input type="radio" class="r" id="we" name="webselect2"
     value="0"  checked="checked" /><label for="we">����web</label>
    <input type="radio" class="r" id="wf" name="webselect2" disabled="disabled"
     value="1" /><label for="wf" title="�Բ���wForum���ڵ�����">wForum</label>
	  <input type="hidden" value="/wForum/frames.php" name="comeurl" />
	  <input type="submit" name="logon" class="b" id="logon" value="��¼" />
	  <input type="button" name="guest" id="guest" value="����"  class="b"
	  onclick="guestlogin()" /> 
	  <input type="button" name="submit2" value="ע��" class="b"
	    onclick="register()" />
  </form>
                
     </div><!-- mainform -->
  
     <div id="onlineinfo">Ŀǰ��������<?php echo '['.bbs_getonlinenumber(),']('.bbs_getwwwguestnumber().' WWW GUEST)';?>
     </div><!-- onlineinfo -->

     <div id="maintip">
     	<b>��վ����ʾ����</b>
     	<h2 class='dotmark'>�Ƽ�ʹ��<a href="#">TELNET</a>��ʽ��վ</h2>
     	<h2 class='dotmark'><a href="#">TELNET��վָ��</a></h2>
     	<h2 class='dotmark'>�Ƽ�ʹ��<a href="#">FTerm</a> <a href="#">CTerm</a></h2>
     	<br />
     	
     	<b>���Ƽ����ӡ���</b>
<?php
link_board("TJExpress","ͬ�ÿ�Ѷ" );
link_board("Job","��ְ����" );
link_board("Secondhand","�����г�" );
link_board("PieBridge","ȵ������" );
link_board("Picture","��ͼ" );
link_board("ComputerTech","����ҽԺ" );
link_board("Undergraduate","������֮��" );
?>
     	
     </div><!-- maintip -->
     
     <div id="footer">
<hr/>
&copy;1999-2007 ͬ�ô�ѧBBS ͬ�۹���վ TongjiBBS,
All Rights Reserved<h1><a href="http://www.laolin.com" title="author:Laolin" target="_blank">A</a></h1>
<a onclick="" href="#" title="bbs AT mail dot tongji dot edu dot cn">::��ϵվ��::</a>
<a title="ͬ�۹���BBS" onclick="window.external.addFavorite('http://bbs.tongji.edu.cn','ͬ�ô�ѧBBS ͬ�۹���վ');return false" href="#">::�����ղ�::</a>


 <a href="http://www.miibeian.gov.cn" target="_blank">��ICP��05013949��</a>
     </div><!-- footer -->
     
     
		
	</div><!-- container -->
</div><!-- wrapper -->
</body>
</html>