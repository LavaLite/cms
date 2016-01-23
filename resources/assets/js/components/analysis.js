var Analysis = Vue.extend({
    data: function() {
        return {
            analysisId: false,
            isLoading: false,
            hasDiff: false
        };
    },
    created: function() {
        SyntaxHighlighter.defaults.toolbar = false;
        SyntaxHighlighter.defaults.gutter = false;
        SyntaxHighlighter.defaults['quick-code'] = false;
    },
    ready: function() {
        var $analysis = $('#analysis');
        $analysis.removeClass('hide');
        $('#status-buttons').removeClass('hide');
        this.analysisId = $analysis.data('id');
        this.hasDiff = $analysis.data('has-diff');
        if ($analysis.data('has-result')) {
            this.getResults();
        }
        this.subscribe();
    },
    methods: {
        getResults: function() {
            var self = this;
            var results = $('#results');
            var url = StyleCI.globals.base_url + '/api/analyses/' + self.analysisId;

            self.isLoading = true;

            return $.get(url)
                .done(function(response) {
                    results.html(response).promise().done(function() {
                        SyntaxHighlighter.highlight();
                    });
                })
                .fail(function(response) {
                    (new StyleCI.Notifier()).notify(response.responseJSON.errors[0].title);
                })
                .always(function() {
                    self.isLoading = false;
                });
        },
        AnalysisStatusChangeEventHandler: function(data) {
            if ($('#analysis').length) {
                var status = $('p.js-status');

                status.html('<i class="' + data.event.icon + '"></i> ' + data.event.description);

                this.hasDiff = data.event.has_diff;

                if (data.event.status === 2) {
                    status.attr('class', 'js-status status-green');
                } else if (data.event.status > 2) {
                    status.attr('class', 'js-status status-red');
                    this.getResults();
                } else {
                    status.attr('class', 'js-status status-grey');
                }
            }
        },
        subscribe: function() {
            var self = this;
            StyleCI.Pusher.getChannel('analysis-' + self.analysisId)
                .bind('AnalysisStatusUpdatedEvent', self.AnalysisStatusChangeEventHandler);
        }
    }
});

Vue.component('sc-analysis', Analysis);
