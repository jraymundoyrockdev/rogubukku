var timelineBoxBuilder = {

    buildTimeline: function (transaction) {
        var isInverted = (transaction.id % 2 == 0) ? '' : 'timeline-inverted';
        return '<li class="' + isInverted + '">' + this.badge(transaction) + '<div class="timeline-panel">' + this.heading(transaction) + this.body(transaction.reason) + '</div>' + '</li>';
    },

    badge: function (transaction) {
        var transactionTypeLogo = 'unlock';
        return '<div class="timeline-badge info"><i class="fa fa-' + transactionTypeLogo + '"></i></div>';
    },

    body: function (message) {
        return '<div class="timeline-body"> <p>' + message + '</p> </div>';
    },

    heading: function (transaction) {

        var heading = '<div class="timeline-heading"> <h4 class="timeline-title">' + transaction.logged_by + ' in</h4>';

        return heading += '<span><i class="fa fa-clock-o fa-2x"></i> ' + transaction.transaction_date + '</span> <hr /> </div>';

    }
}
