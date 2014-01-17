<!-- 路径: /app/View/Products/view.ctp -->
<h1>商品詳細</h1>
<p>購入数を入力して、購入ボタンを押してください。</p>
<form action="/webpro2exam/A10DC524/Sales/add" id="" method="post" accept-charset="utf-8">
<?php //echo $this->Form->create('Post'); ?>
<table>
<input name="data[Sale][product_id]" type="hidden" value="<?php echo $products['Product']['id']?>" required="required">
    <tr>
        <td>商品名</td>
        <td><?php echo $products['Product']['name']?></td>
    </tr>
    <tr>
        <td>価額</td>
        <td><?php echo $products['Product']['price'].'円'?></td>
    </tr>
    <tr>
        <td>購入数</td>
        <td><input name="data[Sale][quantity]" type="text" id="PostQuantity" required="required"></td>
    </tr>
</table>
<td><input name="data[Sale][sales_at]" type="hidden" value="<?php echo date('Y-m-d H:i:s',time());?>" required="required"></td>
 <?php echo $this->Form->end('購入'); ?>

</form>