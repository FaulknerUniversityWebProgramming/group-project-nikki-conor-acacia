select timediff(
    (select update_time from information_schema.tables where table_schema='contacts' and table_name='contacts'),
    (select create_time from information_schema.tables where table_schema='contacts' and table_name='contacts')
) as data_load_time_diff;

