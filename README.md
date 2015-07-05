# php_type_comparisons
php类型比较和相等检测


<table class="doctable table">
   <caption><strong>使用 PHP 函数对变量 <var class="varname"><var class="varname">$x</var></var> 进行比较</strong></caption>
   
    <thead>
     <tr>
      <th>表达式</th>
      <th><span class="function"><a href="function.gettype.php" class="function">gettype()</a></span></th>
      <th><span class="function"><a href="function.empty.php" class="function">empty()</a></span></th>
      <th><span class="function"><a href="function.is-null.php" class="function">is_null()</a></span></th>
      <th><span class="function"><a href="function.isset.php" class="function">isset()</a></span></th>
      <th><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span> : <em>if($x)</em></th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><em>$x = "";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = null;</em></td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>var $x;</em></td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><var class="varname"><var class="varname">$x</var></var> is undefined</td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = array();</em></td>
      <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = false;</em></td>
      <td><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = true;</em></td>
      <td><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 1;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 42;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 0;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = -1;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "1";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "0";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "-1";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "php";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "true";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = "false";</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

    </tbody>
   
  </table>
