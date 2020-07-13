<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use \ccxt\ExchangeError;

class bitpanda extends Exchange {

    public function describe() {
        return $this->deep_extend(parent::describe (), array(
            'id' => 'bitpanda',
            'name' => 'Bitpanda',
            'countries' => array( 'AT' ), // Austria
            'rateLimit' => 300,
            'version' => 'v1',
            // new metainfo interface
            'has' => array(
                'createDepositAddress' => true,
                'fetchBalance' => true,
                'fetchCurrencies' => true,
                'fetchMarkets' => true,
                'fetchOHLCV' => true,
                'fetchOrderBook' => true,
                'fetchTime' => true,
                'fetchTrades' => true,
                'fetchTradingFees' => true,
                'fetchTicker' => true,
                'fetchTickers' => true,
            ),
            'timeframes' => array(
                '1m' => '1/MINUTES',
                '5m' => '5/MINUTES',
                '15m' => '15/MINUTES',
                '30m' => '30/MINUTES',
                '1h' => '1/HOURS',
                '4h' => '4/HOURS',
                '1d' => '1/DAYS',
                '1w' => '1/WEEKS',
                '1M' => '1/MONTHS',
            ),
            'urls' => array(
                'logo' => 'https://user-images.githubusercontent.com/51840849/87309947-ec787300-c525-11ea-92c1-ae23715762b1.jpg',
                'api' => array(
                    'public' => 'https://api.exchange.bitpanda.com/public',
                    'private' => 'https://api.exchange.bitpanda.com/public',
                ),
                'www' => 'https://www.bitpanda.com',
                'doc' => array(
                    'https://developers.bitpanda.com',
                ),
                'fees' => 'https://www.bitpanda.com/en/pro/fees',
            ),
            'api' => array(
                'public' => array(
                    'get' => array(
                        'currencies',
                        'candlesticks/{instrument_code}',
                        'fees',
                        'instruments',
                        'order-book/{instrument_code}',
                        'market-ticker',
                        'market-ticker/{instrument_code}',
                        'price-ticks/{instrument_code}',
                        'time',
                    ),
                ),
                'private' => array(
                    'get' => array(
                        'account/balances',
                        'account/deposit/crypto/{currency_code}',
                        'account/deposit/fiat/EUR',
                        'account/deposits',
                        'account/deposits/bitpanda',
                        'account/withdrawals',
                        'account/withdrawals/bitpanda',
                        'account/fees',
                        'account/orders',
                        'account/orders/{order_id}',
                        'account/orders/{order_id}/trades',
                        'account/trades',
                        'account/trades/{trade_id}',
                        'account/trading-volume',
                    ),
                    'post' => array(
                        'account/deposit/crypto',
                        'account/withdraw/crypto',
                        'account/withdraw/fiat',
                        'account/fees',
                        'account/orders',
                    ),
                    'delete' => array(
                        'account/orders',
                        'account/orders/{order_id}',
                        'account/orders/client/{client_id}',
                    ),
                ),
            ),
            'fees' => array(
                'trading' => array(
                    'tierBased' => false,
                    'percentage' => true,
                    'taker' => 0.15 / 100,
                    'maker' => 0.10 / 100,
                    'tiers' => [
                        // volume in BTC
                        array(
                            'taker' => [
                                [0, 0.15 / 100],
                                [100, 0.13 / 100],
                                [250, 0.13 / 100],
                                [1000, 0.1 / 100],
                                [5000, 0.09 / 100],
                                [10000, 0.075 / 100],
                                [20000, 0.065 / 100],
                            ],
                            'maker' => [
                                [0, 0.1 / 100],
                                [100, 0.1 / 100],
                                [250, 0.09 / 100],
                                [1000, 0.075 / 100],
                                [5000, 0.06 / 100],
                                [10000, 0.05 / 100],
                                [20000, 0.05 / 100],
                            ],
                        ),
                    ],
                ),
            ),
            'requiredCredentials' => array(
                'apiKey' => true,
                'secret' => false,
            ),
            // exchange-specific options
            'options' => array(
            ),
            'exceptions' => array(
                'exact' => array(
                    'INVALID_CREDENTIALS' => '\\ccxt\\AuthenticationError',
                    'MISSING_CREDENTIALS' => '\\ccxt\\AuthenticationError',
                    'INVALID_APIKEY' => '\\ccxt\\AuthenticationError',
                    'INVALID_SCOPES' => '\\ccxt\\AuthenticationError',
                    'INVALID_SUBJECT' => '\\ccxt\\AuthenticationError',
                    'INVALID_ISSUER' => '\\ccxt\\AuthenticationError',
                    'INVALID_AUDIENCE' => '\\ccxt\\AuthenticationError',
                    'INVALID_DEVICE_ID' => '\\ccxt\\AuthenticationError',
                    'INVALID_IP_RESTRICTION' => '\\ccxt\\AuthenticationError',
                    'APIKEY_REVOKED' => '\\ccxt\\AuthenticationError',
                    'APIKEY_EXPIRED' => '\\ccxt\\AuthenticationError',
                    'SYNCHRONIZER_TOKEN_MISMATCH' => '\\ccxt\\AuthenticationError',
                    'SESSION_EXPIRED' => '\\ccxt\\AuthenticationError',
                    'INTERNAL_ERROR' => '\\ccxt\\AuthenticationError',
                    'CLIENT_IP_BLOCKED' => '\\ccxt\\PermissionDenied',
                    'MISSING_PERMISSION' => '\\ccxt\\PermissionDenied',
                    'ILLEGAL_CHARS' => '\\ccxt\\BadRequest',
                    'UNSUPPORTED_MEDIA_TYPE' => '\\ccxt\\BadRequest',
                    'ACCOUNT_HISTORY_TIME_RANGE_TOO_BIG' => '\\ccxt\\BadRequest',
                    'CANDLESTICKS_TIME_RANGE_TOO_BIG' => '\\ccxt\\BadRequest',
                    'INVALID_INSTRUMENT_CODE' => '\\ccxt\\BadRequest',
                    'INVALID_ORDER_TYPE' => '\\ccxt\\BadRequest',
                    'INVALID_UNIT' => '\\ccxt\\BadRequest',
                    'INVALID_PERIOD' => '\\ccxt\\BadRequest',
                    'INVALID_TIME' => '\\ccxt\\BadRequest',
                    'INVALID_DATE' => '\\ccxt\\BadRequest',
                    'INVALID_CURRENCY' => '\\ccxt\\BadRequest',
                    'INVALID_AMOUNT' => '\\ccxt\\BadRequest',
                    'INVALID_PRICE' => '\\ccxt\\BadRequest',
                    'INVALID_LIMIT' => '\\ccxt\\BadRequest',
                    'INVALID_QUERY' => '\\ccxt\\BadRequest',
                    'INVALID_CURSOR' => '\\ccxt\\BadRequest',
                    'INVALID_ACCOUNT_ID' => '\\ccxt\\BadRequest',
                    'INVALID_SIDE' => '\\ccxt\\BadRequest',
                    'INVALID_ACCOUNT_HISTORY_FROM_TIME' => '\\ccxt\\BadRequest',
                    'INVALID_ACCOUNT_HISTORY_MAX_PAGE_SIZE' => '\\ccxt\\BadRequest',
                    'INVALID_ACCOUNT_HISTORY_TIME_PERIOD' => '\\ccxt\\BadRequest',
                    'INVALID_ACCOUNT_HISTORY_TO_TIME' => '\\ccxt\\BadRequest',
                    'INVALID_CANDLESTICKS_GRANULARITY' => '\\ccxt\\BadRequest',
                    'INVALID_CANDLESTICKS_UNIT' => '\\ccxt\\BadRequest',
                    'INVALID_ORDER_BOOK_DEPTH' => '\\ccxt\\BadRequest',
                    'INVALID_ORDER_BOOK_LEVEL' => '\\ccxt\\BadRequest',
                    'INVALID_PAGE_CURSOR' => '\\ccxt\\BadRequest',
                    'INVALID_TIME_RANGE' => '\\ccxt\\BadRequest',
                    'INVALID_TRADE_ID' => '\\ccxt\\BadRequest',
                    'INVALID_UI_ACCOUNT_SETTINGS' => '\\ccxt\\BadRequest',
                    'NEGATIVE_AMOUNT' => '\\ccxt\\BadRequest',
                    'NEGATIVE_PRICE' => '\\ccxt\\BadRequest',
                    'MIN_SIZE_NOT_SATISFIED' => '\\ccxt\\BadRequest',
                    'BAD_AMOUNT_PRECISION' => '\\ccxt\\BadRequest',
                    'BAD_PRICE_PRECISION' => '\\ccxt\\BadRequest',
                    'BAD_TRIGGER_PRICE_PRECISION' => '\\ccxt\\BadRequest',
                    'MAX_OPEN_ORDERS_EXCEEDED' => '\\ccxt\\BadRequest',
                    'MISSING_PRICE' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_ORDER_TYPE' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_SIDE' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_CANDLESTICKS_PERIOD_PARAM' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_CANDLESTICKS_UNIT_PARAM' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_FROM_PARAM' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_INSTRUMENT_CODE' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_ORDER_ID' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_TO_PARAM' => '\\ccxt\\ArgumentsRequired',
                    'MISSING_TRADE_ID' => '\\ccxt\\ArgumentsRequired',
                    'INVALID_ORDER_ID' => '\\ccxt\\OrderNotFound',
                    'NOT_FOUND' => '\\ccxt\\OrderNotFound',
                    'INSUFFICIENT_LIQUIDITY' => '\\ccxt\\InsufficientFunds',
                    'INSUFFICIENT_FUNDS' => '\\ccxt\\InsufficientFunds',
                    'NO_TRADING' => '\\ccxt\\ExchangeNotAvailable',
                    'SERVICE_UNAVAILABLE' => '\\ccxt\\ExchangeNotAvailable',
                    'GATEWAY_TIMEOUT' => '\\ccxt\\ExchangeNotAvailable',
                    'RATELIMIT' => '\\ccxt\\DDoSProtection',
                    'CF_RATELIMIT' => '\\ccxt\\DDoSProtection',
                    'INTERNAL_SERVER_ERROR' => '\\ccxt\\ExchangeError',
                ),
                'broad' => array(
                ),
            ),
        ));
    }

    public function fetch_time($params = array ()) {
        $response = $this->publicGetTime ($params);
        //
        //     {
        //         iso => '2020-07-10T05:17:26.716Z',
        //         epoch_millis => 1594358246716,
        //     }
        //
        return $this->safe_integer($response, 'epoch_millis');
    }

    public function fetch_currencies($params = array ()) {
        $response = $this->publicGetCurrencies ($params);
        //
        //     array(
        //         {
        //             "$code":"BEST",
        //             "precision":8
        //         }
        //     )
        //
        $result = array();
        for ($i = 0; $i < count($response); $i++) {
            $currency = $response[$i];
            $id = $this->safe_string($currency, 'code');
            $code = $this->safe_currency_code($id);
            $result[$code] = array(
                'id' => $id,
                'code' => $code,
                'name' => null,
                'info' => $currency, // the original payload
                'active' => null,
                'fee' => null,
                'precision' => $this->safe_integer($currency, 'precision'),
                'limits' => array(
                    'amount' => array( 'min' => null, 'max' => null ),
                    'price' => array( 'min' => null, 'max' => null ),
                    'cost' => array( 'min' => null, 'max' => null ),
                    'withdraw' => array( 'min' => null, 'max' => null ),
                ),
            );
        }
        return $result;
    }

    public function fetch_markets($params = array ()) {
        $response = $this->publicGetInstruments ($params);
        //
        //     array(
        //         {
        //             $state => 'ACTIVE',
        //             $base => array( code => 'ETH', $precision => 8 ),
        //             $quote => array( code => 'CHF', $precision => 2 ),
        //             amount_precision => 4,
        //             market_precision => 2,
        //             min_size => '10.0'
        //         }
        //     )
        //
        $result = array();
        for ($i = 0; $i < count($response); $i++) {
            $market = $response[$i];
            $baseAsset = $this->safe_value($market, 'base', array());
            $quoteAsset = $this->safe_value($market, 'quote', array());
            $baseId = $this->safe_string($baseAsset, 'code');
            $quoteId = $this->safe_string($quoteAsset, 'code');
            $id = $baseId . '_' . $quoteId;
            $base = $this->safe_currency_code($baseId);
            $quote = $this->safe_currency_code($quoteId);
            $symbol = $base . '/' . $quote;
            $precision = array(
                'amount' => $this->safe_integer($market, 'amount_precision'),
                'price' => $this->safe_integer($market, 'market_precision'),
            );
            $limits = array(
                'amount' => array(
                    'min' => null,
                    'max' => null,
                ),
                'price' => array(
                    'min' => null,
                    'max' => null,
                ),
                'cost' => array(
                    'min' => $this->safe_float($market, 'min_size'),
                    'max' => null,
                ),
            );
            $state = $this->safe_string($market, 'state');
            $active = ($state === 'ACTIVE');
            $result[] = array(
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'precision' => $precision,
                'limits' => $limits,
                'info' => $market,
                'active' => $active,
            );
        }
        return $result;
    }

    public function fetch_trading_fees($params = array ()) {
        $this->load_markets();
        $response = $this->publicGetFees ($params);
        //
        //     array(
        //         {
        //             "fee_group_id":"default",
        //             "display_text":"The standard $fee plan.",
        //             "fee_tiers":array(
        //                 array("$volume":"0.0","fee_group_id":"default","maker_fee":"0.1","taker_fee":"0.15"),
        //                 array("$volume":"100.0","fee_group_id":"default","maker_fee":"0.1","taker_fee":"0.13"),
        //                 array("$volume":"250.0","fee_group_id":"default","maker_fee":"0.09","taker_fee":"0.13"),
        //                 array("$volume":"1000.0","fee_group_id":"default","maker_fee":"0.075","taker_fee":"0.1"),
        //                 array("$volume":"5000.0","fee_group_id":"default","maker_fee":"0.06","taker_fee":"0.09"),
        //                 array("$volume":"10000.0","fee_group_id":"default","maker_fee":"0.05","taker_fee":"0.075"),
        //                 array("$volume":"20000.0","fee_group_id":"default","maker_fee":"0.05","taker_fee":"0.065")
        //             ),
        //             "fee_discount_rate":"25.0",
        //             "minimum_price_value":"0.12"
        //         }
        //     )
        //
        $feeGroupsById = $this->index_by($response, 'fee_group_id');
        $feeGroupId = $this->safe_value($this->options, 'fee_group_id', 'default');
        $feeGroup = $this->safe_value($feeGroupsById, $feeGroupId, array());
        $feeTiers = $this->safe_value($feeGroup, 'fee_tiers');
        $result = array();
        for ($i = 0; $i < count($this->symbols); $i++) {
            $symbol = $this->symbols[$i];
            $fee = array(
                'info' => $feeGroup,
                'symbol' => $symbol,
                'maker' => null,
                'taker' => null,
                'percentage' => true,
                'tierBased' => true,
            );
            $takerFees = array();
            $makerFees = array();
            for ($i = 0; $i < count($feeTiers); $i++) {
                $tier = $feeTiers[$i];
                $volume = $this->safe_float($tier, 'volume');
                $taker = $this->safe_float($tier, 'taker_fee');
                $maker = $this->safe_float($tier, 'maker_fee');
                $taker /= 100;
                $maker /= 100;
                $takerFees[] = array( $volume, $taker );
                $makerFees[] = array( $volume, $maker );
                if ($i === 0) {
                    $fee['taker'] = $taker;
                    $fee['maker'] = $maker;
                }
            }
            $tiers = array(
                'taker' => $takerFees,
                'maker' => $makerFees,
            );
            $fee['tiers'] = $tiers;
            $result[$symbol] = $fee;
        }
        return $result;
    }

    public function parse_ticker($ticker, $market = null) {
        //
        // fetchTicker, fetchTickers
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "sequence":602562,
        //         "time":"2020-07-10T06:27:34.951Z",
        //         "state":"ACTIVE",
        //         "is_frozen":0,
        //         "quote_volume":"1695555.1783768",
        //         "base_volume":"205.67436",
        //         "last_price":"8143.91",
        //         "best_bid":"8143.71",
        //         "best_ask":"8156.9",
        //         "price_change":"-147.47",
        //         "price_change_percentage":"-1.78",
        //         "high":"8337.45",
        //         "low":"8110.0"
        //     }
        //
        $timestamp = $this->parse8601($this->safe_string($ticker, 'time'));
        $marketId = $this->safe_string($ticker, 'instrument_code');
        $symbol = null;
        if ($marketId !== null) {
            if (is_array($this->markets_by_id) && array_key_exists($marketId, $this->markets_by_id)) {
                $market = $this->markets_by_id[$marketId];
            } else if ($marketId !== null) {
                list($baseId, $quoteId) = explode('_', $marketId);
                $base = $this->safe_currency_code($baseId);
                $quote = $this->safe_currency_code($quoteId);
                $symbol = $base . '/' . $quote;
            }
        }
        if (($symbol === null) && ($market !== null)) {
            $symbol = $market['symbol'];
        }
        $last = $this->safe_float($ticker, 'last_price');
        $percentage = $this->safe_float($ticker, 'price_change_percentage');
        $change = $this->safe_float($ticker, 'price_change');
        $open = null;
        $average = null;
        if (($last !== null) && ($change !== null)) {
            $open = $last - $change;
            $average = $this->sum($last, $open) / 2;
        }
        $baseVolume = $this->safe_float($ticker, 'base_volume');
        $quoteVolume = $this->safe_float($ticker, 'quote_volume');
        $vwap = null;
        if ($quoteVolume !== null && $baseVolume !== null) {
            $vwap = $quoteVolume / $baseVolume;
        }
        return array(
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'high' => $this->safe_float($ticker, 'high'),
            'low' => $this->safe_float($ticker, 'low'),
            'bid' => $this->safe_float($ticker, 'best_bid'),
            'bidVolume' => null,
            'ask' => $this->safe_float($ticker, 'best_ask'),
            'askVolume' => null,
            'vwap' => $vwap,
            'open' => $open,
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => $change,
            'percentage' => $percentage,
            'average' => $average,
            'baseVolume' => $baseVolume,
            'quoteVolume' => $quoteVolume,
            'info' => $ticker,
        );
    }

    public function fetch_ticker($symbol, $params = array ()) {
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'instrument_code' => $market['id'],
        );
        $response = $this->publicGetMarketTickerInstrumentCode (array_merge($request, $params));
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "sequence":602562,
        //         "time":"2020-07-10T06:27:34.951Z",
        //         "state":"ACTIVE",
        //         "is_frozen":0,
        //         "quote_volume":"1695555.1783768",
        //         "base_volume":"205.67436",
        //         "last_price":"8143.91",
        //         "best_bid":"8143.71",
        //         "best_ask":"8156.9",
        //         "price_change":"-147.47",
        //         "price_change_percentage":"-1.78",
        //         "high":"8337.45",
        //         "low":"8110.0"
        //     }
        //
        return $this->parse_ticker($response, $market);
    }

    public function fetch_tickers($symbols = null, $params = array ()) {
        $this->load_markets();
        $tickers = $this->publicGetMarketTicker ($params);
        //
        //     array(
        //         {
        //             "instrument_code":"BTC_EUR",
        //             "sequence":602562,
        //             "time":"2020-07-10T06:27:34.951Z",
        //             "state":"ACTIVE",
        //             "is_frozen":0,
        //             "quote_volume":"1695555.1783768",
        //             "base_volume":"205.67436",
        //             "last_price":"8143.91",
        //             "best_bid":"8143.71",
        //             "best_ask":"8156.9",
        //             "price_change":"-147.47",
        //             "price_change_percentage":"-1.78",
        //             "high":"8337.45",
        //             "low":"8110.0"
        //         }
        //     )
        //
        $result = array();
        for ($i = 0; $i < count($tickers); $i++) {
            $ticker = $this->parse_ticker($tickers[$i]);
            $symbol = $ticker['symbol'];
            $result[$symbol] = $ticker;
        }
        return $result;
    }

    public function fetch_order_book($symbol, $limit = null, $params = array ()) {
        $this->load_markets();
        $request = array(
            'instrument_code' => $this->market_id($symbol),
            // level 1 means only the best bid and ask
            // level 2 is a compiled order book up to market precision
            // level 3 is a full orderbook
            // if you wish to get regular updates about orderbooks please use the Websocket channel
            // heavy usage of this endpoint may result in limited access according to rate limits rules
            // 'level' => 3, // default
        );
        if ($limit !== null) {
            $request['depth'] = $limit;
        }
        $response = $this->publicGetOrderBookInstrumentCode (array_merge($request, $params));
        //
        // level 1
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "time":"2020-07-10T07:39:06.343Z",
        //         "asks":{
        //             "value":array(
        //                 "price":"8145.29",
        //                 "amount":"0.96538",
        //                 "number_of_orders":1
        //             }
        //         ),
        //         "bids":{
        //             "value":{
        //                 "price":"8134.0",
        //                 "amount":"1.5978",
        //                 "number_of_orders":5
        //             }
        //         }
        //     }
        //
        // level 2
        //
        //     {
        //         "instrument_code":"BTC_EUR","time":"2020-07-10T07:36:43.538Z",
        //         "asks":array(
        //             array("price":"8146.59","amount":"0.89691","number_of_orders":1),
        //             array("price":"8146.89","amount":"1.92062","number_of_orders":1),
        //             array("price":"8169.5","amount":"0.0663","number_of_orders":1),
        //         ),
        //         "bids":array(
        //             array("price":"8143.49","amount":"0.01329","number_of_orders":1),
        //             array("price":"8137.01","amount":"5.34748","number_of_orders":1),
        //             array("price":"8137.0","amount":"2.0","number_of_orders":1),
        //         )
        //     }
        //
        // level 3
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "time":"2020-07-10T07:32:31.525Z",
        //         "bids":array(
        //             array("price":"8146.79","amount":"0.01537","order_id":"5d717da1-a8f4-422d-afcc-03cb6ab66825"),
        //             array("price":"8139.32","amount":"3.66009","order_id":"d0715c68-f28d-4cf1-a450-d56cf650e11c"),
        //             array("price":"8137.51","amount":"2.61049","order_id":"085fd6f4-e835-4ca5-9449-a8f165772e60"),
        //         ),
        //         "asks":array(
        //             array("price":"8153.49","amount":"0.93384","order_id":"755d3aa3-42b5-46fa-903d-98f42e9ae6c4"),
        //             array("price":"8153.79","amount":"1.80456","order_id":"62034cf3-b70d-45ff-b285-ba6307941e7c"),
        //             array("price":"8167.9","amount":"0.0018","order_id":"036354e0-71cd-492f-94f2-01f7d4b66422"),
        //         )
        //     }
        //
        $timestamp = $this->parse8601($this->safe_string($response, 'time'));
        return $this->parse_order_book($response, $timestamp, 'bids', 'asks', 'price', 'amount');
    }

    public function parse_ohlcv($ohlcv, $market = null) {
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "$granularity":array("$unit":"HOURS","$period":1),
        //         "high":"9252.65",
        //         "low":"9115.27",
        //         "open":"9250.0",
        //         "close":"9132.35",
        //         "total_amount":"33.85924",
        //         "volume":"311958.9635744",
        //         "time":"2020-05-08T22:59:59.999Z",
        //         "last_sequence":461123
        //     }
        //
        $granularity = $this->safe_value($ohlcv, 'granularity');
        $unit = $this->safe_string($granularity, 'unit');
        $period = $this->safe_string($granularity, 'period');
        $units = array(
            'MINUTES' => 'm',
            'HOURS' => 'h',
            'DAYS' => 'd',
            'WEEKS' => 'w',
            'MONTHS' => 'M',
        );
        $lowercaseUnit = $this->safe_string($units, $unit);
        $timeframe = $period . $lowercaseUnit;
        $durationInSeconds = $this->parse_timeframe($timeframe);
        $duration = $durationInSeconds * 1000;
        $timestamp = $this->parse8601($this->safe_string($ohlcv, 'time'));
        $modulo = $this->integer_modulo($timestamp, $duration);
        $alignedTimestamp = $timestamp - $modulo;
        $options = $this->safe_value($this->options, 'fetchOHLCV', array());
        $volumeField = $this->safe_string($options, 'volume', 'total_amount');
        return array(
            $alignedTimestamp,
            $this->safe_float($ohlcv, 'open'),
            $this->safe_float($ohlcv, 'high'),
            $this->safe_float($ohlcv, 'low'),
            $this->safe_float($ohlcv, 'close'),
            $this->safe_float($ohlcv, $volumeField),
        );
    }

    public function fetch_ohlcv($symbol, $timeframe = '1m', $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market($symbol);
        $periodUnit = $this->safe_string($this->timeframes, $timeframe);
        list($period, $unit) = explode('/', $periodUnit);
        $durationInSeconds = $this->parse_timeframe($timeframe);
        $duration = $durationInSeconds * 1000;
        if ($limit === null) {
            $limit = 1500;
        }
        $request = array(
            'instrument_code' => $market['id'],
            // 'from' => $this->iso8601($since),
            // 'to' => $this->iso8601($this->milliseconds()),
            'period' => $period,
            'unit' => $unit,
        );
        if ($since === null) {
            $now = $this->milliseconds();
            $request['to'] = $this->iso8601($now);
            $request['from'] = $this->iso8601($now - $limit * $duration);
        } else {
            $request['from'] = $this->iso8601($since);
            $request['to'] = $this->iso8601($this->sum($since, $limit * $duration));
        }
        $response = $this->publicGetCandlesticksInstrumentCode (array_merge($request, $params));
        //
        //     array(
        //         array("instrument_code":"BTC_EUR","granularity":array("$unit":"HOURS","$period":1),"high":"9252.65","low":"9115.27","open":"9250.0","close":"9132.35","total_amount":"33.85924","volume":"311958.9635744","time":"2020-05-08T22:59:59.999Z","last_sequence":461123),
        //         array("instrument_code":"BTC_EUR","granularity":array("$unit":"HOURS","$period":1),"high":"9162.49","low":"9040.0","open":"9132.53","close":"9083.69","total_amount":"26.19685","volume":"238553.7812365","time":"2020-05-08T23:59:59.999Z","last_sequence":461376),
        //         array("instrument_code":"BTC_EUR","granularity":array("$unit":"HOURS","$period":1),"high":"9135.7","low":"9002.59","open":"9055.45","close":"9133.98","total_amount":"26.21919","volume":"238278.8724959","time":"2020-05-09T00:59:59.999Z","last_sequence":461521),
        //     )
        //
        return $this->parse_ohlcvs($response, $market, $timeframe, $since, $limit);
    }

    public function parse_trade($trade, $market = null) {
        //
        // fetchTrades (public)
        //
        //     {
        //         "instrument_code":"BTC_EUR",
        //         "$price":"8137.28",
        //         "$amount":"0.22269",
        //         "taker_side":"BUY",
        //         "volume":"1812.0908832",
        //         "time":"2020-07-10T14:44:32.299Z",
        //         "trade_timestamp":1594392272299,
        //         "sequence":603047
        //     }
        //
        $timestamp = $this->parse8601($this->safe_string($trade, 'time'));
        $side = $this->safe_string_lower($trade, 'taker_side');
        $price = $this->safe_float($trade, 'price');
        $amount = $this->safe_float($trade, 'amount');
        $cost = $this->safe_float($trade, 'volume');
        $marketId = $this->safe_string($trade, 'instrument_code');
        $symbol = null;
        if ($marketId !== null) {
            if (is_array($this->markets_by_id) && array_key_exists($marketId, $this->markets_by_id)) {
                $market = $this->markets_by_id[$marketId];
                $symbol = $market['symbol'];
            } else {
                list($baseId, $quoteId) = explode('_', $marketId);
                $base = $this->safe_currency_code($baseId);
                $quote = $this->safe_currency_code($quoteId);
                $symbol = $base . '/' . $quote;
            }
        }
        if (($market !== null) && ($symbol === null)) {
            $symbol = $market['symbol'];
        }
        return array(
            'id' => $this->safe_string($trade, 'sequence'),
            'order' => null,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601($timestamp),
            'symbol' => $symbol,
            'type' => null,
            'side' => $side,
            'price' => $price,
            'amount' => $amount,
            'cost' => $cost,
            'takerOrMaker' => null,
            'fee' => null,
            'info' => $trade,
        );
    }

    public function fetch_trades($symbol, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market($symbol);
        $request = array(
            'instrument_code' => $market['id'],
            // 'from' => $this->iso8601($since),
            // 'to' => $this->iso8601($this->milliseconds()),
        );
        if ($since !== null) {
            // returns price ticks for a specific $market with an interval of maximum of 4 hours
            // sorted by latest first
            $request['from'] = $this->iso8601($since);
            $request['to'] = $this->iso8601($this->sum($since, 14400000));
        }
        $response = $this->publicGetPriceTicksInstrumentCode (array_merge($request, $params));
        //
        //     array(
        //         {
        //             "instrument_code":"BTC_EUR",
        //             "price":"8137.28",
        //             "amount":"0.22269",
        //             "taker_side":"BUY",
        //             "volume":"1812.0908832",
        //             "time":"2020-07-10T14:44:32.299Z",
        //             "trade_timestamp":1594392272299,
        //             "sequence":603047
        //         }
        //     )
        //
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function sign($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urls['api'][$api] . '/' . $this->version . '/' . $this->implode_params($path, $params);
        $query = $this->omit($params, $this->extract_params($path));
        if ($api === 'public') {
            if ($query) {
                $url .= '?' . $this->urlencode($query);
            }
        } else if ($api === 'private') {
            $this->check_required_credentials();
            $headers = array(
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            );
            if ($method === 'POST') {
                $body = $this->json($query);
                $headers['Content-Type'] = 'application/json';
            }
        }
        return array( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function fetch_balance($params = array ()) {
        $this->load_markets();
        $response = $this->privateGetAccountBalances ($params);
        //
        //     {
        //         "account_id":"4b95934f-55f1-460c-a525-bd5afc0cf071",
        //         "$balances":array(
        //             {
        //                 "account_id":"4b95934f-55f1-460c-a525-bd5afc0cf071",
        //                 "currency_code":"BTC",
        //                 "change":"10.0",
        //                 "available":"10.0",
        //                 "locked":"0.0",
        //                 "sequence":142135994,
        //                 "time":"2020-07-01T10:57:32.959Z"
        //             }
        //         )
        //     }
        //
        $balances = $this->safe_value($response, 'balances', array());
        $result = array( 'info' => $response );
        for ($i = 0; $i < count($balances); $i++) {
            $balance = $balances[$i];
            $currencyId = $this->safe_string($balance, 'currency_code');
            $code = $this->safe_currency_code($currencyId);
            $account = $this->account();
            $account['free'] = $this->safe_float($balance, 'available');
            $account['used'] = $this->safe_float($balance, 'locked');
            $result[$code] = $account;
        }
        return $this->parse_balance($result);
    }

    public function create_deposit_address($code, $params = array ()) {
        $this->load_markets();
        $currency = $this->currency($code);
        $request = array(
            'currency' => $currency['id'],
        );
        $response = $this->privatePostAccountDepositCrypto (array_merge($request, $params));
        //
        //     {
        //         "$address":"rBnNhk95FrdNisZtXcStzriFS8vEzz53DM",
        //         "destination_tag":"865690307",
        //         "enabled":true,
        //         "is_smart_contract":false
        //     }
        //
        $address = $this->safe_string($response, 'address');
        $tag = $this->safe_string($response, 'destination_tag');
        $this->check_address($address);
        return array(
            'currency' => $code,
            'address' => $address,
            'tag' => $tag,
            'info' => $response,
        );
    }

    public function handle_errors($code, $reason, $url, $method, $headers, $body, $response, $requestHeaders, $requestBody) {
        if ($response === null) {
            return;
        }
        //
        //     array("error":"MISSING_FROM_PARAM")
        //     array("error":"MISSING_TO_PARAM")
        //     array("error":"CANDLESTICKS_TIME_RANGE_TOO_BIG")
        //
        $feedback = $this->id . ' ' . $body;
        $message = $this->safe_string($response, 'error');
        if ($message !== null) {
            $this->throw_exactly_matched_exception($this->exceptions['exact'], $message, $feedback);
            $this->throw_broadly_matched_exception($this->exceptions['broad'], $message, $feedback);
            throw new ExchangeError($feedback); // unknown $message
        }
    }
}
