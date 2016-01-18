<footer class="container">
    <p>
        &copy;{$smarty.now|date_format:'%Y'} Lucas MM Fonseca</br>
        Controle de Estoque
    </p>
</footer>
</body>
{section name=i loop=$js}
    <script type="text/javascript" src="{$js[i]}"></script>
{/section}
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</body>
</html>