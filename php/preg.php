<?php
// ���ı��е��������һ��.
$text = "April fools day is 04/01/2002\n";
$text.= "Last christmas was 12/24/2001\n";
// �ص�����
function next_year($matches)
{
  // ͨ��: $matches[0]����ɵ�ƥ��
  // $matches[1]�ǵ�һ�����������ƥ��
  // �Դ�����
  return $matches[1].($matches[2]+1);
}
echo preg_replace_callback(
            "|(\d{2}/\d{2}/)(\d{4})|",
            "a",
            $text);

?>
