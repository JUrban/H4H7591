Hi Geoff, go and have some cold beer while I am trying to solve this very hard problem!
% remaining time: 299 next slice time: 5
dis+11_7_3 on thm.pred_set
% (56114)Time limit reached!
% ------------------------------
% Version: Vampire 4.0 CASC-25 Entry
% Termination reason: Time limit
% Termination phase: Saturation

% Active clauses: 1152
% Passive clauses: 6519
% Generated clauses: 36167
% Final active clauses: 1113
% Final passive clauses: 4997
% Input formulas: 104
% Initial clauses: 260
% 
% Duplicate literals: 506
% Trivial inequalities: 50
% Fw subsumption resolutions: 2446
% Fw demodulations: 2869
% Bw demodulations: 13
% 
% Simple tautologies: 246
% Equational tautologies: 46
% Forward subsumptions: 21889
% Fw demodulations to eq. taut.: 20
% 
% Binary resolution: 10648
% Factoring: 1540
% Forward superposition: 7873
% Backward superposition: 9633
% Self superposition: 62
% Equality factoring: 26
% Equality resolution: 8
% 
% Split clauses: 869
% Split components: 1739
% SAT solver clauses: 1163
% SAT solver unit clauses: 12
% SAT solver binary clauses: 78
% 
% Sat splits: 869
% Sat splitting refutations: 6
% 
% TWLsolver clauses: 1163
% TWLsolver calls for satisfiability: 422
% 
% Memory used [KB]: 18677
% Time elapsed: 0.600 s
% ------------------------------
% ------------------------------
% remaining time: 293 next slice time: 6
lrs-11_2_cond=on:fde=unused:gs=on:nwc=3:stl=30:sdd=off:sfr=on:ssfp=100000:ssfq=1.4:smm=sco:ssnc=all_4 on thm.pred_set
% (56122)Time limit reached!
% ------------------------------
% Version: Vampire 4.0 CASC-25 Entry
% Termination reason: Time limit
% Termination phase: Saturation

% Active clauses: 580
% Passive clauses: 3364
% Generated clauses: 21220
% Final active clauses: 529
% Final passive clauses: 2527
% Input formulas: 104
% Initial clauses: 260
% 
% Duplicate literals: 117
% Trivial inequalities: 82
% Fw subsumption resolutions: 1270
% Fw demodulations: 2963
% Bw demodulations: 273
% Condensations: 59
% Global subsumptions: 19
% 
% Simple tautologies: 248
% Equational tautologies: 7
% Forward subsumptions: 9235
% Fw demodulations to eq. taut.: 17
% 
% Binary resolution: 2863
% Factoring: 94
% Forward superposition: 5988
% Backward superposition: 3634
% Self superposition: 50
% Equality factoring: 4
% Equality resolution: 13
% 
% Split clauses: 13
% Split components: 26
% SAT solver clauses: 3994
% SAT solver unit clauses: 318
% SAT solver binary clauses: 81
% SAT solver learnt clauses: 38
% SAT solver learnt literals: 12
% 
% Sat splits: 13
% Sat splitting refutations: 18
% 
% TWLsolver clauses: 3918
% TWLsolver calls for satisfiability: 1910
% 
% Memory used [KB]: 17142
% Time elapsed: 0.700 s
% ------------------------------
% ------------------------------
% remaining time: 286 next slice time: 103
lrs+11_2_br=off:cond=on:fde=none:gs=on:gsaa=full_model:lwlo=on:nwc=2:sas=minisat:stl=30:ssfp=100000:ssfq=1.4:smm=sco:ssnc=none:sp=occurrence:urr=on_98 on thm.pred_set
% Refutation found. Thanks to Tanya!
% SZS status Theorem for thm.pred_set
% SZS output start Proof for thm.pred_set
fof(f7544,plain,(
  $false),
  inference(subsumption_resolution,[],[f7543,f7475])).
fof(f7475,plain,(
  p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(subsumption_resolution,[],[f7474,f375])).
fof(f375,plain,(
  p(s(bool,'T_0'))),
  inference(cnf_transformation,[],[f1])).
fof(f1,axiom,(
  p(s(bool,'T_0'))),
  file('thm.pred_set.PHP',aHL_TRUTH)).
fof(f7474,plain,(
  ~p(s(bool,'T_0')) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(forward_demodulation,[],[f7473,f728])).
fof(f728,plain,(
  s(bool,'T_0') = s(bool,'const.pred_set.FINITE_1'(s(fun(sK13,bool),sK16)))),
  inference(unit_resulting_resolution,[],[f372,f424])).
fof(f424,plain,(
  ( ! [X0] : (~p(s(bool,X0)) | s(bool,'T_0') = s(bool,X0)) )),
  inference(cnf_transformation,[],[f279])).
fof(f279,plain,(
  ! [X0] : ((s(bool,'T_0') != s(bool,X0) | p(s(bool,X0))) & (~p(s(bool,X0)) | s(bool,'T_0') = s(bool,X0)))),
  inference(nnf_transformation,[],[f147])).
fof(f147,plain,(
  ! [X0] : (s(bool,'T_0') = s(bool,X0) <=> p(s(bool,X0)))),
  inference(rectify,[],[f40])).
fof(f40,axiom,(
  ! [X10] : (s(bool,'T_0') = s(bool,X10) <=> p(s(bool,X10)))),
  file('thm.pred_set.PHP','thm.bool.EQ_CLAUSES|split|0')).
fof(f372,plain,(
  p(s(bool,'const.pred_set.FINITE_1'(s(fun(sK13,bool),sK16))))),
  inference(cnf_transformation,[],[f276])).
fof(f276,plain,(
  p(s(bool,'const.pred_set.FINITE_1'(s(fun(sK13,bool),sK16)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15)))))) & p(s(bool,'const.pred_set.INJ_3'(s(fun(sK12,sK13),sK14),s(fun(sK12,bool),sK15),s(fun(sK13,bool),sK16))))),
  inference(skolemisation,[status(esa),new_symbols(skolem,[sK12,sK13,sK14,sK15,sK16])],[f229])).
fof(f229,plain,(
  ? [X0,X1,X2,X3,X4] : (p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3)))))) & p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))))),
  inference(flattening,[],[f228])).
fof(f228,plain,(
  ? [X0,X1,X2,X3,X4] : ((p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))))))) & p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))))),
  inference(ennf_transformation,[],[f107])).
fof(f107,plain,(
  ~! [X0,X1,X2,X3,X4] : ((p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))))))) => ~p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))))),
  inference(flattening,[],[f106])).
fof(f106,plain,(
  ~! [X0,X1] : ! [X2,X3,X4] : ((p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))))))) => ~p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))))),
  inference(rectify,[],[f6])).
fof(f6,negated_conjecture,(
  ~! [X6,X7] : ! [X8,X9,X10] : ((p(s(bool,'const.pred_set.FINITE_1'(s(fun(X7,bool),X10)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X7,bool),X10))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X6,bool),X9))))))) => ~p(s(bool,'const.pred_set.INJ_3'(s(fun(X6,X7),X8),s(fun(X6,bool),X9),s(fun(X7,bool),X10)))))),
  inference(negated_conjecture,[],[f5])).
fof(f5,conjecture,(
  ! [X6,X7] : ! [X8,X9,X10] : ((p(s(bool,'const.pred_set.FINITE_1'(s(fun(X7,bool),X10)))) & p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X7,bool),X10))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X6,bool),X9))))))) => ~p(s(bool,'const.pred_set.INJ_3'(s(fun(X6,X7),X8),s(fun(X6,bool),X9),s(fun(X7,bool),X10)))))),
  file('thm.pred_set.PHP','thm.pred_set.PHP')).
fof(f7473,plain,(
  ~p(s(bool,'const.pred_set.FINITE_1'(s(fun(sK13,bool),sK16)))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(subsumption_resolution,[],[f7444,f375])).
fof(f7444,plain,(
  ~p(s(bool,'T_0')) | ~p(s(bool,'const.pred_set.FINITE_1'(s(fun(sK13,bool),sK16)))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(superposition,[],[f543,f730])).
fof(f730,plain,(
  s(bool,'T_0') = s(bool,'const.pred_set.INJ_3'(s(fun(sK12,sK13),sK14),s(fun(sK12,bool),sK15),s(fun(sK13,bool),sK16)))),
  inference(unit_resulting_resolution,[],[f374,f424])).
fof(f374,plain,(
  p(s(bool,'const.pred_set.INJ_3'(s(fun(sK12,sK13),sK14),s(fun(sK12,bool),sK15),s(fun(sK13,bool),sK16))))),
  inference(cnf_transformation,[],[f276])).
fof(f543,plain,(
  ( ! [X4,X2,X0,X3,X1] : (~p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))) | ~p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4))))))) )),
  inference(cnf_transformation,[],[f252])).
fof(f252,plain,(
  ! [X0,X1,X2,X3,X4] : (~p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))) | ~p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4)))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4)))))))),
  inference(flattening,[],[f251])).
fof(f251,plain,(
  ! [X0,X1,X2,X3,X4] : ((~p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))) | ~p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4))))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4)))))))),
  inference(ennf_transformation,[],[f215])).
fof(f215,plain,(
  ! [X0,X1,X2,X3,X4] : ((p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))) & p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4))))) => p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4)))))))),
  inference(flattening,[],[f214])).
fof(f214,plain,(
  ! [X0,X1] : ! [X2,X3,X4] : ((p(s(bool,'const.pred_set.INJ_3'(s(fun(X0,X1),X2),s(fun(X0,bool),X3),s(fun(X1,bool),X4)))) & p(s(bool,'const.pred_set.FINITE_1'(s(fun(X1,bool),X4))))) => p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X0,bool),X3))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X1,bool),X4)))))))),
  inference(rectify,[],[f93])).
fof(f93,axiom,(
  ! [X6,X7] : ! [X8,X9,X10] : ((p(s(bool,'const.pred_set.INJ_3'(s(fun(X6,X7),X8),s(fun(X6,bool),X9),s(fun(X7,bool),X10)))) & p(s(bool,'const.pred_set.FINITE_1'(s(fun(X7,bool),X10))))) => p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(X6,bool),X9))),s('type.num.num','const.pred_set.CARD_1'(s(fun(X7,bool),X10)))))))),
  file('thm.pred_set.PHP','thm.pred_set.INJ_CARD')).
fof(f7543,plain,(
  ~p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(subsumption_resolution,[],[f7514,f375])).
fof(f7514,plain,(
  ~p(s(bool,'T_0')) | ~p(s(bool,'const.arithmetic.<=_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))))))),
  inference(superposition,[],[f531,f729])).
fof(f729,plain,(
  s(bool,'T_0') = s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15)))))),
  inference(unit_resulting_resolution,[],[f373,f424])).
fof(f373,plain,(
  p(s(bool,'const.prim_rec.<_2'(s('type.num.num','const.pred_set.CARD_1'(s(fun(sK13,bool),sK16))),s('type.num.num','const.pred_set.CARD_1'(s(fun(sK12,bool),sK15))))))),
  inference(cnf_transformation,[],[f276])).
fof(f531,plain,(
  ( ! [X0,X1] : (~p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X0),s('type.num.num',X1)))) | ~p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X1),s('type.num.num',X0))))) )),
  inference(cnf_transformation,[],[f326])).
fof(f326,plain,(
  ! [X0,X1] : ((p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X0),s('type.num.num',X1)))) | p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X1),s('type.num.num',X0))))) & (~p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X1),s('type.num.num',X0)))) | ~p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X0),s('type.num.num',X1))))))),
  inference(nnf_transformation,[],[f205])).
fof(f205,plain,(
  ! [X0,X1] : (~p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X0),s('type.num.num',X1)))) <=> p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X1),s('type.num.num',X0)))))),
  inference(flattening,[],[f204])).
fof(f204,plain,(
  ! [X0,X1] : (~p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X0),s('type.num.num',X1)))) <=> p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X1),s('type.num.num',X0)))))),
  inference(rectify,[],[f14])).
fof(f14,axiom,(
  ! [X11,X12] : (~p(s(bool,'const.prim_rec.<_2'(s('type.num.num',X11),s('type.num.num',X12)))) <=> p(s(bool,'const.arithmetic.<=_2'(s('type.num.num',X12),s('type.num.num',X11)))))),
  file('thm.pred_set.PHP','thm.arithmetic.NOT_LESS')).
% SZS output end Proof for thm.pred_set
% ------------------------------
% Version: Vampire 4.0 CASC-25 Entry
% Termination reason: Refutation

% Active clauses: 431
% Passive clauses: 1036
% Generated clauses: 7163
% Final active clauses: 426
% Final passive clauses: 600
% Input formulas: 104
% Initial clauses: 260
% 
% Duplicate literals: 6
% Trivial inequalities: 16
% Fw subsumption resolutions: 154
% Fw demodulations: 925
% Bw demodulations: 9
% Condensations: 5
% 
% Simple tautologies: 65
% Equational tautologies: 15
% Forward subsumptions: 4862
% Fw demodulations to eq. taut.: 50
% Bw demodulations to eq. taut.: 1
% 
% Unit resulting resolution: 1316
% Factoring: 1
% Forward superposition: 2113
% Backward superposition: 2313
% Self superposition: 36
% Equality factoring: 2
% Equality resolution: 5
% 
% Split clauses: 3
% Split components: 6
% SAT solver clauses: 1044
% SAT solver unit clauses: 546
% SAT solver binary clauses: 256
% 
% Sat splits: 3
% 
% Memory used [KB]: 6652
% Time elapsed: 0.163 s
% ------------------------------
% ------------------------------
% Success in time 1.487 s
