<x-app-layout>
    @if($role == "java")
        <script>
            let datos = <?php print_r($data['data']); ?>; 
            $(document).ready(function(){
                $("main").html(datos['html']["java"]);
            });
        </script>
    @else
        <script>
            let datos = <?php print_r($data['data']); ?>;
            $(document).ready(function(){
                $("main").html(datos['html']["django"]);
            });
        </script>
    @endif
</x-app-layout>