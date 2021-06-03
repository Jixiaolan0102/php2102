<?php
//1.查找 order_info 表中 order_sn  为 2020042321284 或 2020042369891 的记录
select order_sn from p_order_info where order_sn=2020042321284 or order_sn=2020042369891;
//2 查找  order_info 表中 user_id 为 1116 的订单记录，按支付时间倒序排序 。
select pay_time from p_order_info where user_id=1116 order by pay_time desc;
// 3 查找 order_goods 表中 商品名（goods_name 字段） 中包含 WDR5620 的记录
//4 统计 订单表（order_info）中有多少用户（count + distinct）
select count(distinct user_id) from p_inder_info
// 5 统计user_id为 1867 的用户订单总金额
//6 统计所有用户的订单总金额（按user_id分组）
select sum(goods_amount) from p_order_info;
//7 统计所有用户中支付金额最多的前10人
select consignee from p_order_info order by money_paid desc limit 10;
select money_paid from p_order_info order by money_paid desc limit 10;
//8 统计订单表（order_info）中支付金额最高的前10个用户，及这10个用户的订单总金额(统计 order_info.money_paid)
select consignee,money_paid,order_amount from p_order_info order by money_paid desc LIMIT 10
//9 查找 order_info 表中 money_paid 大于等于 5000 并且 小于 等于 6000 的记录（两种写法）
select * from p_order_info  where goods_amount BETWEEN 5000 and 6000 order by goods_amount
//10 使用子查询查找 order_info 表中 money_paid 最大的记录（不一定是一条记录）
select max(money_paid) from p_order_info
//11 使用子查询查找 order_info 表中 money_paid 最小的记录（不一定是一条记录）
select min(money_paid) from p_order_info
//12  查找 order_info 表记录,按 money_paid 降序排序，取20条
select money_paid from p_order_info order by money_paid desc LIMIT 20
//13 统计 order_info 表有多少条记录？
//14 统计 order_info 表中订单均价？
select avg(order_amount) from p_order_info
//15 查找 order_info 表中共有多少个不同的 user_id
select count(DISTINCT user_id) from p_order_info
//16 统计 order_info 表中 money_paid（订单金额） 总和 
select sum(money_paid) from p_order_info
//17 统计 order_info 表中 money_paid 的平均值
select avg(money_paid) from p_order_info
//18 检索 order_info 表中 add_time(字段类型为时间戳) 为 2013 年 6 月的记录
//使用函数：FROM_UNIXTIME(),YEAR(),MONTH(),DAY()
//FROM_UNIXTIME(1402848000);		//函数参数为 unix时间戳，运算结果  Y-M-D H:i:S
//YEAR(),MONTH(),DAY()	// 函数参数格式 “2014-06-15 02:32:39” 
select FROM_UNIXTIME(add_time) from p_order_info  //只把时间戳转为年月日时分秒
//19、在订单表（order_info）中查找 最新的 10条记录及下单的用户信息。（需要联表查询 order_info 与 users 表）

