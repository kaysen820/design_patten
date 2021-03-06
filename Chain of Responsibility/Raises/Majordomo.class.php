<?php
// 总监
class Majordomo extends Manager {
	public function requestApplications($request)
	{
		if($request->getRequestType() == '请假' && $request->getNumber() <= 5)
		{
			echo sprintf(
					'【%s】 : 【%s】 数量 %s 被批准<hr>',
					$this->name,
					$request->getRequestContent(),
					$request->getNumber()
			);
		}
		else
		{
			if(!empty($this->superior))
			{
				$this->superior->requestApplications($request);
			}
		}
	}
}