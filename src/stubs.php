<?php

/**
 * Start profiling.
 *
 * @param int $flags   Optional flags to add additional information to the profiling.
 * @param array $options An array of optional options, namely, the 'ignored_functions' option to pass in functions to be ignored during profiling.
 * @return null
 */
function tideways_enable($flags = 0, array $options = [])
{
}

/**
 * Stops the profiler, and returns data from the run.
 *
 * @return array an array of xhprof data, from the run.
 */
function tideways_disable()
{
}

/**
 * Get the profiling transaction name.
 *
 * @return string
 */
function tideways_transaction_name()
{
}

/**
 * Allows to check if we need to require the old ini_get("auto_prepend_file").
 *
 * @return bool
 */
function tideways_prepend_overwritten()
{
}

/**
 * Returns the data from debug_backtrace() as an array instead of string.
 *
 * @return array
 */
function tideways_fatal_backtrace()
{
}

/**
 * Return the last detected exception if "exception_function" option has been add.
 *
 * @return Exception
 */
function tideways_last_detected_exception()
{
}

/**
 * Get the last occurred error (alias of error_get_last() function)
 *
 * @return array
 */
function tideways_last_fatal_error()
{
}

/**
 * This function was removed, because the daemon is now responsible for SQL filtering and anonymization.
 *
 * @param string $sql
 * @return string
 */
function tideways_sql_minify($sql)
{
}

/**
 * Create a profiling span.
 *
 * @param string $category
 * @return int
 */
function tideways_span_create($category)
{
}

/**
 * Get all spans
 *
 * @return array
 */
function tideways_get_spans()
{
}

/**
 * Record start of timer in microseconds.
 * If timer is already running, don't record another start.
 *
 * @param int $span
 * @return null
 */
function tideways_span_timer_start($span)
{
}

/**
 * Record stop of timer in microseconds.
 * If timer is not running, don't record.
 *
 * @param int $span
 * @return null
 */
function tideways_span_timer_stop($span)
{
}

/**
 * Annotate span with metadata.
 *
 * @param int $span
 * @param array $annotations
 * @return null
 */
function tideways_span_annotate($span, $annotations)
{
}

/**
 * Watch a function for calls and create timeline spans around it.
 *
 * @param string $name
 * @param string $category
 */
function tideways_span_watch($name, $category)
{
}

/**
 * Watch a function and invoke a callback when its called.
 *
 * @param string $name
 * @param callable $callback
 */
function tideways_span_callback($name, $callback)
{
}

/**
 * @type int
 * Used to add CPU profiling information to the output.
 */
const TIDEWAYS_FLAGS_CPU = 1;

/**
 * @type int
 * Used to add memory profiling information to the output.
 */
const TIDEWAYS_FLAGS_MEMORY = 2;

/**
 * @type int
 * Used to skip all built-in (internal) functions.
 */
const TIDEWAYS_FLAGS_NO_BUILTINS = 4;

/**
 * @type int
 * Used to profile only builtin functions.
 */
const TIDEWAYS_FLAGS_NO_USERLAND = 8;

/**
 * @type int
 * Used to skips profiling of require/include and eval statements
 */
const TIDEWAYS_FLAGS_NO_COMPILE = 10;

/**
 * @type int
 */
const TIDEWAYS_FLAGS_NO_SPANS = 20;

/**
 * @type int
 */
const TIDEWAYS_FLAGS_NO_HIERACHICAL = 40;
