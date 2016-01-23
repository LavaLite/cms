var AccountList = Vue.extend({
    data: function() {
        return {
            isLoading: false,
            search: '',
            repos: []
        };
    },
    ready: function() {
        this.getRepos();
    },
    methods: {
        getRepos: function() {
            var self = this;
            var url = StyleCI.globals.base_url + '/api/account/repos';

            self.isLoading = true;

            return $.get(url)
                .done(function(response) {
                    var sortedData = _.sortBy(response.data, function(repo, key) {
                        repo.id = key;
                        return repo.name.toLowerCase();
                    });
                    self.$set('repos', sortedData);
                })
                .fail(function(response) {
                    (new StyleCI.Notifier()).notify(response.responseJSON.errors[0].title);
                })
                .always(function() {
                    self.isLoading = false;
                });
        },
        toggleEnableDisableRepo: function(repo, e) {
            e.preventDefault();

            if (repo.enabled) {
                if (confirm('Are you sure you want to disable this repo? All analyses will be removed from our system.')) {
                    this.enableOrDisableRepo(repo, e);
                }
            } else {
                this.enableOrDisableRepo(repo, e);
            }
        },
        enableOrDisableRepo: function(repo, e) {
            var btn = $(e.target);
            btn.button('loading');

            $.post(btn.attr('href'))
                .done(function(response) {
                    repo.enabled = response.enabled;
                })
                .fail(function(response) {
                    (new StyleCI.Notifier()).notify(response.responseJSON.errors[0].title);
                })
                .always(function() {
                    btn.button('reset');
                });
        },
        syncRepos: function(e) {
            e.preventDefault();

            var self = this,
                btn = $(e.target);

            btn.button('loading');
            self.isLoading = true;
            self.repos = [];

            $.post(btn.attr('href'))
                .done(function(response) {
                    $.when(self.getRepos()).then(function() {
                        btn.button('reset').blur();
                    });
                })
                .fail(function(response) {
                    (new StyleCI.Notifier()).notify(response.responseJSON.errors[0].title);
                });
        }
    }
});

Vue.component('sc-account', AccountList);
