<?php
/*
 * Copyright 2015-present, Lauri Keel
 * All rights reserved.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

function expect(...$args)
{
	foreach($args as $i => $v)
	{
		if($v !== true)
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}
}

function expectNot(...$args)
{
	foreach($args as $i => $v)
	{
		if($v !== false)
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect not #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}
}

function expectNotNull(...$args)
{
	foreach($args as $i => $v)
	{
		if($v === null)
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect not null #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}

	return $args[0];
}

function expectNotEmpty(...$args)
{
	foreach($args as $i => $v)
	{
		if(empty($v))
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect not empty #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}

	return $args[0];
}

function expectNull(...$args)
{
	foreach($args as $i => $v)
	{
		if($v !== null)
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect null #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}

	return $args[0];
}

function expectEmpty(...$args)
{
	foreach($args as $i => $v)
	{
		if(!empty($v))
		{
			$a = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0];
			throw new \CommonX\IllegalStateException("expect empty #".$i." failed at ".$a['file'].":".$a['line']);
		}
	}

	return $args[0];
}

