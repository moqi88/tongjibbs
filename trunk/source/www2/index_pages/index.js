function guestlogin()
{
document.form1.id.value="guest";
document.form1.passwd.value="guest";
before_submit();
document.form1.submit();
}
function register()
{
top.location.href="bbsreg0.html";
}

/* ==========================================
����web/wForumѡ�� �Զ���¼��ͬ�Ľ���

ע�����ô˺����ĵط�Ӧ��֤�� id='wf'�Ķ�����

TODO:�ύǰ���ж�һ���ύ���ĺ�����
*/
function before_submit()
{
  is_wforum=document.getElementById('wf').checked;
  
  u_id=document.getElementById('id').value;
  u_passwd=document.getElementById('passwd').value;
  
  haserror=false;
  einfo='';

  
  if(u_id=='')
  {
    haserror=true;
    einfo+='<br/>���������û���';
  }
  if(u_passwd=='')
  {
    haserror=true;
    einfo+='<br/>������������';
  }
  if(haserror)
  {
    ediv=document.getElementById('errorinfo');
    ediv.innerHTML="<div style=\"float:right;\"><a href=\"#\" title=\"hide\" onclick=\"toggle_hide_id('errorinfo');return false;\">"
      +"����</a></div>"
      +'������Ϣ:<b>'+einfo+'</b>';
    ediv.style.display='block';
    return false;
  }
  
  f=document.getElementById('form1');
  if(is_wforum)
    f.action='wForum/logon.php';
  else
    f.action='bbslogin.php';
  return true;
}

function toggle_hide_id(i)
{
  var o=document.getElementById(i);
  if(o.style.display=='none') o.style.display='';
  else o.style.display='none';
}
/* ==================================================
����web/wForumѡ���Զ����벻ͬ����İ���

Ҫ�����������ӳ���href='xxxxx'�⣬������ onclick="return goboard('xxxx')
����ʵ����javascript�������ת�ĵط���href�ĵ�ַ�������ˡ�

ʵ���˸���ѡ����벻�����İ���
*/
function goboard(bd)
{
  o=document.getElementById('wf');
  if(!o)is_wforum=false;
  else 
  is_wforum=o.checked;
  if(is_wforum)
    path="wForum/frames.php?target=board.php%3Fname=";
  else
    path='frames.html?mainurl=/bbsdoc.php?board=';
  top.location.href=path+bd;

  return false;//false to ignore the origin link uri.
}

