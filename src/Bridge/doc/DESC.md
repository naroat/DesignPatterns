# 桥接模式

桥接模式（Bridge Pattern）将抽象部分与它的实现部分分离，使他们都可以独立地变化。它是一种对象结构型模式，又称为柄体模式或接口模式。

## 包含角色

1.Abstraction（抽象类）

  用于定义抽象类的接口，它一般是抽象类而不是接口，其中定义了一个Implementor（实现抽象类）类型的对象并可以维护该对象，它与Implementor之间具有关联关系，它可以包含抽象的业务方法，还可以包含具体的业务方法。

2.RefinedAbstraction（扩充抽象类）

  扩充由Abstraction定义的接口，通常情况下它不再是抽象类而是具体类，它实现了在Abstraction中定义的抽象业务方法，在RefinedAbstraction中可以调用Implementor中定义的业务方法。

3.Implementor（实现类接口）

  定义实现类的接口，这个接口不一定要与Abstraction的接口完全一致，事实上这两个接口可以完全不同，一般地讲，Implementor接口仅提供基本操作，而Abstraction定义的接口可能会做更多更复杂的操作。Implementor接口对这些基本操作进行了定义，而具体实现交给其子类。通过关联关系，在Abstraction中不仅拥有自己的方法，还可以调用Implementor中定义的方法，使用关联关系来代替继承关系。

4.ConcreteImplementor（具体实现类）

  实现Implementor接口并且具体实现它，在不同的ConcreteImplementor中提供基本操作的不同实现，在程序运行时，ConcreteImplementor对象将替代其父类对象，提供给客户端具体的业务操作方法。

## 优缺点
1.优点

（1）分离抽象接口及其实现部分。

（2）极大的减少了子类的个数。

（3）提高了系统的可扩展性。

（4）实现细节对客户透明，可以对用户隐藏实现细节。

2.缺点

（1）桥接模式地引入会增加系统的理解与设计难度。

（2）桥接模式要求正确识别出系统中两个独立变化的维度，因此其适用范围具有一定的局限性。

## 参考

> https://blog.csdn.net/Moxi099/article/details/116895769
> https://designpatternsphp.readthedocs.io/zh_CN/latest/Structural/Bridge/README.html
> https://www.cnblogs.com/yujon/p/5534793.html