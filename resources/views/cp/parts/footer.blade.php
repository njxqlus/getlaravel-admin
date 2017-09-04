<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @lang('cp.footer_right')
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="#">{{ config('app.name', 'Laravel') }}</a>.</strong> @lang('cp.footer_copyright')
</footer>