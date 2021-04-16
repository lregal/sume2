<?php

/*return [
    'in_out' => ['IN' => 'in', 'OUT' => 'out'],
    'type' => [['name' => 'ordinary'], ['name' =>  'extraordinary'], ['name' =>  'absence_excuse']],
    'days_type' => ['WORKING_DAY' => 'working_day', 'BUSINESS_DAY' => 'business_day', 'CALENDAR_DAY' => 'calendar_day'],
    'rule_scope' => ['BY_YEAR' => 'by_year', 'BY_MONTH' => 'by_month', 'BY_DECADE' => 'by_decade', 'BY_LEAVE' => 'by_leave'],
    'status' => ['ACEPTED' => 'accepted', 'PENDING' => 'pending', 'REJECTED' => 'rejected'],
];*/

return [
    'in_out' => [ 'in', 'out'],
    'type' => [ 'ordinary',  'extraordinary','absence_excuse'],
    'days_type' => ['working_day', 'business_day', 'calendar_day'],
    'rule_scope' => [ 'by_year', 'by_month', 'by_decade', 'by_leave'],
    'status' => [ 'accepted',  'pending',  'rejected'],
    'holiday_type' => ['immovable','transferable','nonworking','bridge']
];