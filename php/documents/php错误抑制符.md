错误抑制符工作原理：

使用@时的实际操作为：
1. 保存当前的error_reporting值, 并设置error_reporting(0); //关闭错误输出
2. 恢复之前保存的error_reporting值.

@include('file');
表示为代码即

1.$foo = error_reporting(0);
2.include('file');
3.error_reporting($foo);

因此如果我们需要大量的使用@
不如手动的控制 error_reporting 以节省多次重复动作的开销