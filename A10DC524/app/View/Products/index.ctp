<h1>商品一覧</h1>
<p>購入したい商品を選択してください。</p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($products as $post): ?>
    <tr>
        <td><?php echo $post['Product']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Product']['name'], array('action' => 'view', $post['Product']['id']));?>
        </td>
        <td>
            <?php echo $post['Product']['price'].'円'; ?>
        </td>
    </tr>
    <?php endforeach; ?>
 </table>