<?php
if(time()%3==0)
{
$img_src='http://news.tongji.edu.cn/UploadFile/IMG_7544.JPG';
$link_tip='����ͬ����ͬ���İ��� 
(photo copy from news.tongji.edu.cn)';
$link_to='http://bbs.tongji.edu.cn/bbscon.php?bid=19&id=47199';
}
else
{
//1 ��ҳͼƬ��url��ַ�����Ŀ¼�Ļ�Ҫ��index���ڵ�Ŀ¼�㡣����ͬ�۹���ԭ����ϰ�ߣ�����ʹ��700x350�ĳߴ�
$img_src="index_pages/20070402-spring/spring-".(time()%8).'.jpg';

//2 ������ͼƬ����ʾ������
$link_tip='������������'; //ע�����ַ���������������˫���š�

//3a ͼƬ���ӵ��ĵط�����Ϊ�ջ��裬����link_board���������ӵ�һ������
//$link_to='http://code.google.com'; //ע�����ַ���������������˫���š�

//3b ���ӵ��İ���
$link_board='travel'; //ע�����ַ���������������˫���š�
}

//4 ��ҳ��ʾ������
// ����һ�����飬�����ÿһ���ʾһ����ʾ��ͨ����һ�У�
//
// ע��PHP����������﷨�������ӵ�,ע��key��Ҫ��ͬ��
//    $page_tips=array('key1'=>'value1','key2'=>'value2','key3'=>'value3','key4'=>'value4');
//
// ������±�(key)��ʾ��ʾ�ġ����⡱�����������ĸ�������֡�
// �����ֵ(value)��ʾ��ʾ�ġ����ݡ���HTML��
//
//ע�⣺Ϊ��ͳһ��ʽ�����Ӧ����ʹ��css����� h2.dotmark ��CSS��ʽ���ο�����ʾ����
//�������ӵ�������������ӿ���ʹ�� ר�Ŷ����PHP ���� lind_board('eng_boardname','������ʾ������Ϊ���İ��������ɶ��')���ο�����ʾ��
//��ȻPHP�����ú�����KBS�����ú�������Ҳ�����á�
$page_tips=array(
'��վ����ʾ��'=>
	'<h2 class="dotmark">�Ƽ�ʹ��<a href="#">TELNET</a>��ʽ��վ</h2>
	<h2 class="dotmark"><a href="#">TELNET��վָ��</a></h2>
	<h2 class="dotmark">�Ƽ�ʹ��<a href="#">FTerm</a> <a href="#">CTerm</a></h2>
	',

'���Ƽ����ӡ�'=>
	link_board("TJExpress","ͬ������" ).
	link_board("Job","��ְ����" ).
	link_board("Secondhand","�����г�" ).
	link_board("PieBridge","ȵ������" ).
	link_board("Picture","��ͼ" ).
	link_board("ComputerTech","����ҽԺ" ).
	link_board("Undergraduate","������֮��" )
);


//e1 </head>֮ǰҪ���ӵ����ݣ�һ�㲻Ҫ�裬������֪�����ڸ�ʲô :)
//$extra_head='';

//e2 ��ʾ��ͼƬ�·��Ķ���HTML���� (Ĭ�������Ǿ��е�) 
//$extra_html_after_img='test ';

//e3 ��ʾ��ҳ�ų������Ϸ��Ķ���HTML����
//$extra_html_before_footer='<div style="text-align:left;">2 test aa a BBBBBBBBBBa</div>';


?>
