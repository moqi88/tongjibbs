<?php
/*
todo: 
��ʾ���������������Ǿ�̬�ļٵģ�

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
$themsDir='index_pages/20070402-spring/';
$imgSrc=$themsDir."spring-".(time()%8).'.jpg';
$imgLinkBoard='travel';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
<head>
<title>ͬ�ô�ѧBBS��ͬ�۹���վ Tongji BBS Welcome to  bbs.tongji.edu.cn</title>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<link href="<?php echo $themsDir; ?>index.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $themsDir;?>index.js" type="text/javascript"></script>


</head>
<body>
<div id="wrapper">
  <div id="container">
  	
     <div id="mainimage">
       <a href="/frames.html?mainurl=/bbsdoc.php?board=<?php echo $imgLinkBoard;?>">
     		 <img src="<?php echo $imgSrc; ?>" alt="<?php echo $imgLinkBoard;?> board" /></a>
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
	   onclick="javascript:window.location='/bbsreg1.html'" />
  </form>
                
     </div><!-- mainform -->
     
     
     <div id="onlineinfo">Ŀǰ��������[568](438 WWW GUEST)
     </div><!-- onlineinfo -->

     <div id="maintip">
     	<b>��վ����ʾ����</b>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		�Ƽ�ʹ��<a href="#">TELNET</a>��ʽ��վ
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#">TELNET��վָ��</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		�Ƽ�ʹ��<a href="#">FTerm</a> <a href="#">CTerm</a>
     	<br />
     	
     	<b>���Ƽ����ӡ���</b>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#" onclick="return goboard('');">ͬ�ÿ�Ѷ</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">��ְ����</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">�����г�</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">ȵ������</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">��ͼ</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">����ҽԺ</a>
     		<img src="<?php echo $themsDir ?>dot_blue.gif" />
     		<a href="#"  onclick="return goboard('');">������֮��</a>
     	
     	
     	
     </div><!-- maintip -->
     
     <div id="footer">
<hr/>
&copy1999-2007 ͬ�ô�ѧBBS ͬ�۹���վ TongjiBBS,
All Rights Reserved<h1><a href="http://www.laolin.com" title="author:Laolin" target="_blank">A</a></h1>
<a onclick="" href="#" title="bbs AT mail dot tongji dot edu dot cn">::��ϵվ��::</a>
<a title="ͬ�۹���BBS" onclick="window.external.addFavorite('http://bbs.tongji.edu.cn','ͬ�ô�ѧBBS ͬ�۹���վ');return false" href="#">::�����ղ�::</a>


 <a href="http://www.miibeian.gov.cn" target="_blank">��ICP��05013949��</a>
     </div><!-- footer -->
     
     
		
	</div><!-- container -->
</div><!-- wrapper -->
</body>
</html>
