# 观察者模式

## 什么是观察者模式

观察者模式是对象的行为模式，又叫发布-订阅(Publish/Subscribe)模式。观察者模式定义了一种一对多的依赖关系，让多个观察者对象同时监听某一个主题对象，主题对象在状态发生变化时，会通知所有观察者对象。Redis和常用消息中间件的发布订阅模式，都是基于该原理实现。

## 解决什么问题

观察者模式解决了对象之间紧耦合的问题，观察者模式使我们可以进一步的解耦合。

在观察者模式中，被观察者完全不需要关心观察者，在自身状态有变化时，遍历执行观察者指定方法即完成通知。

在观察者模式中，被观察者通过添加观察者方法，提供给观察者注册，使自己变得可见。

当被观察者改变时，给注册的观察者发送通知。至于观察者如何处理通知，被观察者不需要关心。

这是一种良好的设计，对象之间不必相互理解，同样能够相互通信

## 实例代码，内有注释



## 参考

> https://blog.csdn.net/weiguang102/article/details/116032638