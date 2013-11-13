<?php

namespace Paymer\OneClickIssueSvc;

class Result
{
    const Success = 'Success';
    const FalseOrder = 'FalseOrder';
    const FalseCodes = 'FalseCodes';
    const FalseTransOut = 'FalseTransOut';
    const CodesChanged = 'CodesChanged';
    const OrderLiquidated = 'OrderLiquidated';
    const FalseIssue = 'FalseIssue';
    const InvalidPurse = 'InvalidPurse';
    const InvalidPurseType = 'InvalidPurseType';
    const NotAuthenticated = 'NotAuthenticated';
    const OrderLocked = 'OrderLocked';
    const IssueNotValidYet = 'IssueNotValidYet';
    const WrongAmount = 'WrongAmount';
    const InternalError = 'InternalError';
    const FalseGuaranty = 'FalseGuaranty';
    const NotProvided = 'NotProvided';
    const NotPrivileged = 'NotPrivileged';
    const InvalidPaymentDescription = 'InvalidPaymentDescription';
    const WMTransactionTooOld = 'WMTransactionTooOld';
    const WMTransIDOccupied = 'WMTransIDOccupied';
    const FalseTrans = 'FalseTrans';
    const WMCardDealerOverLimit = 'WMCardDealerOverLimit';
    const SuccessGeneratedBefore = 'SuccessGeneratedBefore';
    const MonolithicOrder = 'MonolithicOrder';
    const FalseUser = 'FalseUser';
    const InvalidWmType = 'InvalidWmType';
    const InvalidObligType = 'InvalidObligType';
    const NotEnoughAmount = 'NotEnoughAmount';
    const CoreCallError = 'CoreCallError';
    const WMTransactionFailed = 'WMTransactionFailed';
    const WMTransactionNotFound = 'WMTransactionNotFound';
    const DestinationPurseLocked = 'DestinationPurseLocked';
    const DbTransactionFailed = 'DbTransactionFailed';
    const AsynchOrderCutStarted = 'AsynchOrderCutStarted';
    const CoreTransNotFound = 'CoreTransNotFound';
    const UserNotApproved = 'UserNotApproved';
    const BadWallet = 'BadWallet';
    const BadCheck = 'BadCheck';
    const WalletNotEmpty = 'WalletNotEmpty';
    const WalletAlreadyExists = 'WalletAlreadyExists';
    const WalletBadName = 'WalletBadName';
    const OneShotPinInsertError = 'OneShotPinInsertError';
    const FalseOneShotPin = 'FalseOneShotPin';
    const WalletUserLocked = 'WalletUserLocked';
    const WalletFrequentReminders = 'WalletFrequentReminders';
    const WalletBadNewMasterPin = 'WalletBadNewMasterPin';
    const UpdateWalletRegError = 'UpdateWalletRegError';
    const WalletMaxAliveOneShotPin = 'WalletMaxAliveOneShotPin';
    const InvalidUserOptionsEx = 'InvalidUserOptionsEx';
    const EnumIdAlreadyRegistered = 'EnumIdAlreadyRegistered';
    const WalletMustBeInactive = 'WalletMustBeInactive';
    const SmallPaybackWalletPeriod = 'SmallPaybackWalletPeriod';
    const TransferRestricted = 'TransferRestricted';
    const InvalidPhoneNumber = 'InvalidPhoneNumber';
    const DeliveryFailed = 'DeliveryFailed';
    const RestrictedPhoneNumber = 'RestrictedPhoneNumber';
    const FalseUserPassword = 'FalseUserPassword';
    const ActivationRequestNotExits = 'ActivationRequestNotExits';
    const ActivationCodeNotMatch = 'ActivationCodeNotMatch';
    const ActivationNotConfirmed = 'ActivationNotConfirmed';
    const WMServicesError = 'WMServicesError';
}
