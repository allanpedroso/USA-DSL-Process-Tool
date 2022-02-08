$(document).ready(function() {
    $('input').change(function() {
        if ($('input[value="usabilityEval"]').is(':checked')) {
            $('evalUsabilityOp').show() && $('evalHeuristicOp').show();
        }
        else if($('input[value="heuristicEval"]').is(':checked')) {
            $('usabilityEval').hide() && $('evalHeuristicOp').show();
        }
    });
});
