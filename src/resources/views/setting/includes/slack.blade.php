<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-slack"></i> {{ trans('calendar::seat.slack_integration') }}</h3>
	</div>
	<form class="form-horizontal" method="POST" action="{{ route('setting.slack.update') }}">
		{{ csrf_field() }}
		<div class="box-body">
			<div class="form-group">
				<label for="slack_integration" class="col-sm-3 control-label">{{ trans('calendar::seat.enabled') }}</label>
				<div class="col-sm-9">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="slack_integration" id="slack_integration" value="1" @if($settings->slack_integration == 1) checked @endif>
						</label>
					</div>
				</div>
			</div>

            <div class="form-group">
                <label for="slack_webhook" class="col-sm-3 control-label">{{ trans('calendar::seat.webhook') }}</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slack_webhook" id="slack_webhook" value="{{ $settings->slack_webhook }}">
                </div>
            </div>

            <div class="form-group">
                <label for="slack_webhook_public" class="col-sm-3 control-label">{{ trans('calendar::seat.webhook_public') }}</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slack_webhook_public" id="slack_webhook_public" value="{{ $settings->slack_webhook_public }}">
                </div>
            </div>

            <div class="form-group">
                <label for="slack_webhook_indy" class="col-sm-3 control-label">{{ trans('calendar::seat.webhook_indy') }}</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slack_webhook_indy" id="slack_webhook_indy" value="{{ $settings->slack_webhook_indy }}">
                </div>
            </div>

            <div class="form-group">
                <label for="slack_webhook_training" class="col-sm-3 control-label">{{ trans('calendar::seat.webhook_training') }}</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slack_webhook_training" id="slack_webhook_training" value="{{ $settings->slack_webhook_training }}">
                </div>
            </div>

			<p class="callout callout-info text-justify">
				{{ trans('calendar::seat.help_emoji') }}
			</p>

			<div class="form-group">
				<label for="slack_emoji_importance_full" class="col-sm-3 control-label">{{ trans('calendar::seat.emoji_full') }}</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="slack_emoji_importance_full" id="slack_emoji_importance_full" value="{{ $settings->slack_emoji_importance_full }}">
				</div>
			</div>
			<div class="form-group">
				<label for="slack_emoji_importance_half" class="col-sm-3 control-label">{{ trans('calendar::seat.emoji_half') }}</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="slack_emoji_importance_half" id="slack_emoji_importance_half" value="{{ $settings->slack_emoji_importance_half }}">
				</div>
			</div>
			<div class="form-group">
				<label for="slack_emoji_importance_empty" class="col-sm-3 control-label">{{ trans('calendar::seat.emoji_empty') }}</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="slack_emoji_importance_empty" id="slack_emoji_importance_empty" value="{{ $settings->slack_emoji_importance_empty }}">
				</div>
			</div>

		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right">{{ trans('calendar::seat.save') }}</button>
		</div>
	</form>
</div>