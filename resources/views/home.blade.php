@extends('layouts.app')

@section('content')
<intro-component></intro-component>
@endsection
<script>
    import IntroComponent from "../js/components/IntroComponent.vue";
    export default {
        components: {IntroComponent}
    }
</script>
