<h1>売上一覧</h1>
<p>これまでに購入された商品一覧です。</p>
<table>
    <tr>
        <th>日時</th>
        <th>商品名</th>
        <th>個数</th>
        <th>合計（個数 * 単価）</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($sales as $post): ?>
    <tr>
        <td><?php echo $post['a']['sales_at']; ?></td>
        <td><?php echo $post['a']['name']; ?></td>
        <td><?php echo $post[0]['SUM(a.quantity)']; ?></td>
        <td><?php echo $post['a']['price']*$post[0]['SUM(a.quantity)'].'円'; ?></td>

    </tr>
    <?php endforeach; ?>
 </table>